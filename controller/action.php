<?php
/*
$view = 'view_home';
if (isset($_GET['view'])) {
    $view = $_GET['view'];
}
*/

if (isset($_GET["connecte"]) && $_GET["connecte"] == "false") {

    var_dump($_SESSION);

    //var_dump($_SESSION);

    unset($_SESSION['username']);
    unset($_SESSION['connecte']);
    unset($_SESSION['role']);
    session_destroy();
    //$_SESSION['connecte'] = false;
    //var_dump($_SESSION);
    header('location:.');
}

//formulaire de connexion
if (isset($_POST["action"])) {
    if ($_POST["action"] == "connexion") {
        if (isset($_POST['nick']) && isset($_POST['mdp'])) {
            if ($_POST['mdp'] != "" && $_POST['nick'] != "") {
                $count = connexion($_POST['nick'], $_POST['mdp']);
                if ($count != 0) { // nom d'utilisateur et mot de passe correcte
                    //var_dump($count);
                    $_SESSION['username'] = $_POST['nick'];
                    $_SESSION['connecte'] = true;
                    //$_SESSION['role'] = recup_role($_POST['nick']);


                    //var_dump($_SESSION['role']);

                    //var_dump($_SESSION['role']);
                    if (isset($_SESSION['username'])) {
                        echo "<p>Bienvenu " . $_SESSION['username'] . "</p>";
                    }
                    //header("Location: .");
                } else {
                    echo "err1 erreur sur le mot de passe ou nick";
                    echo "2 eme possibilité : erreur vous êtes déjà connecté en tant que : ";
                    var_dump($_SESSION);
                    //header("Location: ./?page=connexion");
                }
            } else {
                echo "erreur";
                //echo " vous etes deja connecte?";
                header("Location: ./?page=connexion");
            }
        }
    }
}

/*usless use !isset*/
$page = 'home';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

//include_once "view/view.php";

/*si y a le truc selectionnné alors page view home sinon
view de démarche administrative */

if (!isset($_GET['view'])) {
    // no special book is requested, we'll show a list of all available books  
    
    include 'view/view.php';
} else {
    if (isset($_GET['view'])& $_GET['view']=='view_home') {
        include 'view/view.php'; 
    } else {
        if (isset($_GET['view']) == 'view_dem') {
            include 'view/view_demarche.php';
        }
    
    
}
}

