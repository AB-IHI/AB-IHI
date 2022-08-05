<?php
// include_once "action_user.php";
// include_once "action_media.php";


// el view après toute action on affiche le res
/*usless use !isset*/

// var_dump($_GET['page']);
if (isset($_GET['page'])) {

    $_SESSION['page'] = $_GET['page'];
    //var_dump($_SESSION['page']);
}
else {


    $_SESSION['page'] = 'home';
    // var_dump($_SESSION['page']);
}

//include_once "view/view.php";

/*si y a le truc selectionnné alors page view home sinon
view de démarche administrative */

// if (!isset($_GET['view'])) {
//     // no special book is requested, we'll show a list of all available books  

//     include 'view/view.php';
// } 
//else {
//     if (isset($_GET['view']) & $_GET['view'] == 'view_home') {
//         include 'view/view.php';
//     } else {
//         if (isset($_GET['view']) == 'view_dem') {
//             include 'view/view_demarche.php';
//         }
//     }
// }