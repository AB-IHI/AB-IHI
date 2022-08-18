<?php
// unset($_GET['page']);
// include_once "action_user.php";
// include_once "action_media.php";


// el view après toute action on affiche le res
/*usless use !isset*/

// var_dump($_GET['page']);


// if (isset($_GET['page'])) {

//     $_SESSION['page'] = $_GET['page'];
//     //var_dump($_SESSION['page']);
// }
// else {


//     $_SESSION['page'] = 'home';
//     // var_dump($_SESSION['page']);
// }

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

if (!isset($_GET['page'])) {
    $_SESSION['page'] = 'home';
}

if (isset($_GET['page'])) {

    $_SESSION['page'] = $_GET['page'];
    // var_dump($_SESSION['page']);
    if ($_GET['page'] == 'logout') {
        // Unset all of the session variables
        $_SESSION = array();

        // Destroy the session.
        session_destroy();

        // Redirect to login page
        // header("location: login.php");
        // exit;
        $_SESSION['page'] = 'home';
    }
} else {


    $_SESSION['page'] = 'home';
    // var_dump($_SESSION['page']);
}

include_once "action_user.php";




// if (isset($_POST["action"])) {

//     //---------------------------------------------
//     if ($_POST["action"] == "add") {
//         process_ajout($c);
//     }


//     //---------------------------------------------
//     // if ($_POST["action"] == "delete") {

//     // // requête DELETE

//     // }
// }

// $page = 'login';
// var_dump($page);

// if (isset($_GET['page'])) {
//     if ($_GET['page'] == 'logout') {
//         // Unset all of the session variables
//         $_SESSION = array();

//         // Destroy the session.
//         // session_destroy();

//         // Redirect to login page
//         // header("location: login.php");
//         // exit;

//         $_SESSION['page'] = 'login';
//     }
// }
// var_dump($_SESSION['page']);
