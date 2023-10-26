<form id="frm-image-upload" action="." name='img' method="post"
      enctype="multipart/form-data">
    <input type="hidden" name="action" value="ajout_pic">
    <div class="form-row">
        <div>Choisir image : (max 1MB size, png, jpg, gif only)</div>
        <div>
            <input type="file" class="file-input" name="file-input">
        </div>
    </div>

    <div class="button-row">
        <input type="submit" id="btn-submit" name="upload"
               value="Upload">
    </div>
</form>
<?php if(!empty($response)) { ?>
    <div class="response <?php echo $response["type"]; ?>
    ">
        <?php echo $response["message"]; ?>
    </div>
<?php }?>