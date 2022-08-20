<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>IHI</title>

    <link rel="stylesheet" type="text/css" href="css_js/css/bootstrap.css" />
    <!-- <link rel="stylesheet" type="text/css" href="css_js/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>  -->

    <link rel="stylesheet" type="text/css" href="css_js/style.css" />


</head>

<body class="mb-0">

    <?php
    if ($_SESSION['page'] != 'volunteer') {
        include_once "heder_pls.php";
    } else {
        include_once "headerr.php";
    }
