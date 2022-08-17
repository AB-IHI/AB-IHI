<?php

if (isset($_GET['volunteer'])) {
    // $_SESSION['page'] = 'home';
    include_once "volunteer/header.php";
    include_once "volunteer/".$_SESSION['page'] . ".php";
    include_once  "volunteer/footer.php";
}
else {
include_once "header.php";
include_once $_SESSION['page'] . ".php";
include_once  "footer.php";
}
// var_dump($_SESSION['page']);
// var_dump($_GET['page']);