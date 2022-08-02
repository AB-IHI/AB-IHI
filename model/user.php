<?php



function ajouterUser($user,$email,$mdp) {
    global $c;

        $pseudo = mysqli_real_escape_string($c, $user);
        $mdp = mysqli_real_escape_string($c, $mdp);
        $email = mysqli_real_escape_string($c, $email);
        $sql = "INSERT INTO `users` (`id`, `pseudo`, `mdp`, `role`, `email`) VALUES (NULL, '$pseudo', '$mdp', '', '$email');";
        mysqli_query($c, $sql);
    }

//fontion connexion
function connexion($pseudo,$mdp) {
    global $c;
    //$sql = "SELECT * FROM `users` WHERE `pseudo` = '" . $pseudo . "' and `mdp`= '". $mdp ."'" ;
    $sql = "SELECT count(*) FROM `users` WHERE `pseudo` = '" . $pseudo . "' and `mdp`= '". $mdp ."'" ;
    $exec_requete = mysqli_query($c,$sql);
    $reponse = mysqli_fetch_array($exec_requete);

    //var_dump($reponse);

    $sql = "SELECT id FROM `users` WHERE `pseudo` = '" . $pseudo . "' and `mdp`= '". $mdp ."'" ;
    $exec_requete = mysqli_query($c,$sql);
    $reponse2 = mysqli_fetch_array($exec_requete);
    $_SESSION['id'] = $reponse2;

    return $reponse['count(*)'];
}



function delete_user_db() {
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    if (isset($_GET["id"])) {
        $id = $_GET['id']; // $id is now defined
        //echo $id;
        $sql = "DELETE FROM users WHERE id='".$id."'";
        //echo $sql;
        mysqli_query($c,$sql);
        //mysqli_close($c);
        session_destroy();
        echo "votre compte a été supprimé.";
    };

}

function dispo_pseudo($user){
    global $c;
    $sql = "SELECT pseudo FROM `users` WHERE pseudo='$user'";
    $resultat = mysqli_query($c,$sql);
    $row = mysqli_fetch_assoc($resultat);
    return mysqli_num_rows($resultat) == 0;
}

function dispo_email($user){
    global $c;
    $sql = "SELECT email FROM `users` WHERE email='$user'";
    $resultat = mysqli_query($c,$sql);
    $row = mysqli_fetch_assoc($resultat);
    return mysqli_num_rows($resultat) == 0;
}

function recup_id_user($user){
    global $c;
    $sql = "SELECT id FROM `users` WHERE pseudo='$user'";
    $resultat = mysqli_query($c,$sql);
    $row = mysqli_fetch_assoc($resultat);
    return $row["id"];
}

function recup_pseudo_user($user){
    global $c;
    $sql = "SELECT pseudo FROM `users` WHERE id='$user'";
    $resultat = mysqli_query($c,$sql);
    $row = mysqli_fetch_assoc($resultat);
    return $row["pseudo"];
}

function recup_role($user){
    global $c;
    $sql = "SELECT `role` FROM `users` WHERE pseudo = '$user'";
    $resultat = mysqli_query($c,$sql);
    $row = mysqli_fetch_assoc($resultat);
    $role = $row["role"];
    return $role;
}

function modification_compte ($id, $pseudo, $password, $mail, $user){
    global $c;
    $sql = "UPDATE `users` SET `mdp` = '".$password."', `email` = '".$mail."', `pseudo` = '".$pseudo."' WHERE `users`.`id` = '".$id."'";
    $sql2 = "UPDATE `media` SET `createur` = '".$pseudo."' WHERE `createur` = '".$user."'";
    //echo $sql;
    mysqli_query($c,$sql);
    mysqli_query($c,$sql2);
}

function suppression ($id){
    global $c;
    $pseu = recup_pseudo_user($id);
    if (!recup_role($pseu) == "admin"){
    $sql = "DELETE FROM users WHERE id='".$id."'";
    $sql2 = "DELETE FROM  `commentaires` WHERE id_user='".$id."'";
    $user = recup_pseudo_user($id);
    $sql3 = "DELETE FROM  `media` WHERE createur='".$user."'";
    mysqli_query($c,$sql);
    mysqli_query($c,$sql2);
    mysqli_query($c,$sql3);
    session_destroy();
    header("location: index.php?page=confirm_suppr");
    }
    else
        echo "on peu pas supprimer le compte admin";
     
}



