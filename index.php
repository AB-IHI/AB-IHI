<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

session_start();

include_once "db.php";
include_once "model/ihi.php";
include_once "controller/action.php";
include_once "view/".$_SESSION['view'].".php";
echo "<!-- ";
var_dump($_SESSION['view']);
echo "--> ";
// Close connection
