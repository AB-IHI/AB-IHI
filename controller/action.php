<?php

// C : Contrôleur = Exécution des fonctions du modèle et gestion de interactions avec l'utilisateur (formulaires, liens). Aucun affichage !

// unset($_GET['page']);
// include_once "action_user.php";
// include_once "action_media.php";



if (!isset($_SESSION['view']) or !isset($_SESSION['loggedin']) or $_SESSION["loggedin"] != true) { // test almost same if above

    $_SESSION['view'] = 'view';
    $_SESSION['page'] = 'home';
    // var_dump($_SESSION['page']);
    

}
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

if (!isset($_GET['page'])) { // test almost same if below but both needed
//    $_SESSION['page'] = 'home';
    if (isset($_SESSION['loggedin']) && $_SESSION["loggedin"] == true) {
        $_SESSION['view'] = 'volunteer';

        if (isset($_POST["action"])) {
            if ($_POST["action"] == "ajout_pic") {
                include_once "upload.php";      // will self check that there is an upload
            }
        }
    }
}


if (isset($_GET['page'])) { // test almost same if above but both needed

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
        $_SESSION['view'] = 'view';
        $_SESSION['page'] = 'home';

    }
    if ($_GET['page'] == 'options') {

        header('Location: ./view/options.php');
    }

} /*else {


    // $_SESSION['page'] = 'home'; // not needed anymore since creationn of volunteer
    // var_dump($_SESSION['page']);
}*/

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

if (isset($_GET['explain'])) {
    header('Location: y_yfles/'.$_GET['explain'].'.php');

    // var_dump($_SESSION['page']);
    // if ($_GET['explain'] == 'explanation') {
        // Unset all of the session variables


        // Destroy the session.
        // header('Location: explanation.php');

        // Redirect to login page
        // header("location: login.php");
        // exit;

    // }
}

if (isset($_GET['page'])) {


    // var_dump($_SESSION['page']);
    // if ($_GET['explain'] == 'explanation') {
    // Unset all of the session variables


    // Destroy the session.
    // header('Location: explanation.php');

    // Redirect to login page
    // header("location: login.php");
    // exit;

    // }
}

// include_once "view_controller.php";
echo "<!-- ";
var_dump($_SESSION['view']);
echo "-->";