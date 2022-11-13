<?php

//V : Vue = Affichage : HTML, appels de fonctions d'affichage

// if (isset($_SESSION['loggedin']) && $_SESSION["loggedin"] == true){
//     $_SESSION['page'] = 'volunteer';
//     // include_once "header.php";
//     include_once "".$_SESSION['page'] . ".php";
//     echo "<!--";
//     var_dump($_SESSION['page']);
//     echo "-->";
//     // include_once  "volunteer/footer.php";
// }
// else {

include_once $_SESSION['page'] . ".php";
include_once  "footer.php";
// }
echo "<!--";
var_dump($_SESSION['page']);
echo "-->";
// var_dump($_GET['page']);