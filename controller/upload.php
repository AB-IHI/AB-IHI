<?php

try {

    // Undefined | Multiple Files | $_FILES Corruption Attack
    // If this request falls under any of them, treat it invalid.
    if (
        !isset($_FILES['file-input']['error']) ||
        is_array($_FILES['file-input']['error'])
    ) {
        throw new RuntimeException('Invalid parameters.');
    }

    // Check $_FILES['file-input']['error'] value.
    switch ($_FILES['file-input']['error']) {
        case UPLOAD_ERR_OK:
            break;
        case UPLOAD_ERR_NO_FILE:
            $response = array(
                "type" => "error",
                "message" => "Choose image file to upload."
            );
            throw new RuntimeException('No file sent.');

        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds 1MB"
        );
            throw new RuntimeException('Exceeded filesize limit.');

        default:
            throw new RuntimeException('Unknown errors.');
    }

    // You should also check filesize here.
    if ($_FILES['file-input']['size'] > 1000000) {
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds 1MB"
        );
        throw new RuntimeException('Exceeded filesize limit.');

    }

    // DO NOT TRUST $_FILES['file-input']['mime'] VALUE !!
    // Check MIME Type by yourself.
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    if (false === $ext = array_search(
            $finfo->file($_FILES['file-input']['tmp_name']),
            array(
                'jpg' => 'image/jpeg',
                'png' => 'image/png',
                'gif' => 'image/gif',
            ),
            true
        )) {
        $response = array(
            "type" => "error",
            "message" => "Upload valid images. Only PNG, gif and JPG are allowed."
        );
        throw new RuntimeException('Invalid file format.');

    }

    // You should name it uniquely.
    // DO NOT USE $_FILES['file-input']['name'] WITHOUT ANY VALIDATION !!
    // On this example, obtain safe unique name from its binary data.
    //before name is lost save it in variable?
    $fname = sprintf('%s.%s', sha1_file($_FILES['file-input']['tmp_name']), $ext);
    if (!move_uploaded_file(
        $_FILES['file-input']['tmp_name'],
        sprintf('uploads/%s.%s',
            sha1_file($_FILES['file-input']['tmp_name']),
            $ext
        )
    )) {
        $response = array(
            "type" => "error",
            "message" => "Problem in uploading image files."
        );

        throw new RuntimeException('Failed to move uploaded file.');

    }
    $response = array(
        "type" => "success",
        "message" => "Image uploaded successfully."
    );
//    echo 'File is uploaded successfully.';

    pic_db($c, $fname);// redirects for unknown reason
//    echo $_FILES["file-input"]["tmp_name"];

    //$filename=$_FILES['nameofyourfileinput']['name'];
    //echo $filename;


} catch (RuntimeException $e) {

    echo $e->getMessage();

}