<?php
if (isset($_GET["connecte"]) && $_GET["connecte"] == "false") {


    //var_dump($_SESSION);

    unset($_SESSION['username']);
    unset($_SESSION['connecte']);
    unset($_SESSION['role']);
    session_destroy();
    $_SESSION['connecte'] = false;
    var_dump($_SESSION);
    header('location:.');
}


$page = 'home';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}


//formulaire de création de compte
if (isset($_POST["action"])) {
    if ($_POST["action"] == "add") {
        if (isset($_POST['user']) && isset($_POST['email']) && isset($_POST['mdp'])) {

            if ($_POST['mdp'] != "" && $_POST['user'] != "" && $_POST['email'] != "") {

                if(dispo_pseudo($_POST['user'])){

                    if(dispo_email($_POST['email'])){

                        ajouterUser($_POST["user"], $_POST["email"], $_POST["mdp"]);
                        $_SESSION['username'] = $_POST['user'];
                        $_SESSION['connecte'] = true;
                        $_SESSION['role'] = recup_role($_POST['user']);
                        header("location:./?page=home&user=".$_POST['user']);
                    }
                    else{
                        header("location:?page=inscription&pseudo=".$_POST["user"]."&email=".$_POST["email"]."&err=email");
                    }    
                }
                else{
                    header("location:?page=inscription&pseudo=".$_POST["user"]."&email=".$_POST["email"]."&err=pseudo");
                }
                    
            } else {
                echo 'information incorect';
            }

        }
    }
}
//formulaire de connexion
if (isset($_POST["action"])) {
    if ($_POST["action"] == "connexion") {
        if (isset($_POST['pseudo']) && isset($_POST['pw'])) {
            if ($_POST['pw'] != "" && $_POST['pseudo'] != "") {
                $count = connexion($_POST['pseudo'], $_POST['pw']);
                if ($count != 0) {// nom d'utilisateur et mot de passe correcte
                    //var_dump($count);
                    $_SESSION['username'] = $_POST['pseudo'];
                    $_SESSION['connecte'] = true;
                    $_SESSION['role'] = recup_role($_POST['pseudo']);
                    $_SESSION['id_user'] = recup_id_user($_POST['pseudo']);

                    //var_dump($_SESSION['role']);

                    if (isset($_SESSION['username'])) {
                        echo "<p>Bienvenu " . $_SESSION['username'] . "</p>";
                    }
                    header("Location: .");
                } else {
                    header("Location: ./?page=connexion&err=compte");
                }
            } else {
                header("Location: ./?page=connexion&err=info");

            }
        }
    }
}


//formulaire de modification de compte

if (isset($_POST["action"])) {

    if ($_POST["action"] == "modifier") {

        if (isset($_SESSION["id"][0] )) {

            $id = $_SESSION['id_user'][0]; // $id is now defined
            $password = $_POST['mdp'];
            $mail = $_POST['email'];
            $pseudo =  $_POST['user'];
            
            if(dispo_pseudo($pseudo)){
                $user = $_SESSION["username"];
                modification_compte($id, $pseudo, $password, $mail, $user);
                $_SESSION["username"] = $pseudo;
                header('location:.');
            }else{
                header('location:.?page=modifier&err=pseudo'); 
            }
        }
    }
}


//formulaire de suppression de compte

if (isset($_GET["id"])) {
    $id = $_GET['id']; // $id is now defined
    echo $id;
    // suppression($id);
}