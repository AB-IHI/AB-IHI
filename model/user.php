<?php
//M : Modèle = ensemble de fonctions (chargement, affichages, ajout dans la base de données, ...).



function dispo_in_db($email, $type, $c)
{
    // Prepare a select statement
    $sql = "SELECT id FROM users WHERE " . $type . " = ?";
    var_dump($sql);
    $stmt = mysqli_prepare($c, $sql);
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "s", $param_type);
    var_dump($sql);
    // Set parameters
    $param_type = trim($email);

    // Attempt to execute the prepared statement
    if (mysqli_stmt_execute($stmt)) {
        /* store result */
        mysqli_stmt_store_result($stmt);
        var_dump(mysqli_stmt_num_rows($stmt));
        return mysqli_stmt_num_rows($stmt) == 1;
    }
    // Close statement
    mysqli_stmt_close($stmt);
}

function ajouterUserInfo($c)
{
    global $c;
}












// old functions

function ajouterUser($user, $email, $mdp)
{
    global $c;

    $nick = mysqli_real_escape_string($c, $user);
    $mdp = mysqli_real_escape_string($c, $mdp);
    $email = mysqli_real_escape_string($c, $email);
    $sql = "INSERT INTO `users` (`id`, `nick`, `mdp`, `role`, `email`) VALUES (NULL, '$nick', '$mdp', '', '$email');";
    mysqli_query($c, $sql);
}





function delete_user_db()
{
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    if (isset($_GET["id"])) {
        $id = $_GET['id']; // $id is now defined
        //echo $id;
        $sql = "DELETE FROM users WHERE id='" . $id . "'";
        //echo $sql;
        mysqli_query($c, $sql);
        //mysqli_close($c);
        session_destroy();
        echo "votre compte a été supprimé.";
    };
}

function dispo_pseudo($user)
{
    global $c;
    $sql = "SELECT nick FROM `users` WHERE nick='$user'";
    $resultat = mysqli_query($c, $sql);
    $row = mysqli_fetch_assoc($resultat);
    return mysqli_num_rows($resultat) == 0;
}



function recup_id_user($user)
{
    global $c;
    $sql = "SELECT id FROM `users` WHERE nick='$user'";
    $resultat = mysqli_query($c, $sql);
    $row = mysqli_fetch_assoc($resultat);
    return $row["id"];
}

function recup_nick_user($user)
{
    global $c;
    $sql = "SELECT nick FROM `users` WHERE id='$user'";
    $resultat = mysqli_query($c, $sql);
    $row = mysqli_fetch_assoc($resultat);
    return $row["nick"];
}

function recup_role($user)
{
    global $c;
    $sql = "SELECT `role` FROM `users` WHERE nick = '$user'";
    $resultat = mysqli_query($c, $sql);
    $row = mysqli_fetch_assoc($resultat);
    $role = $row["role"];
    return $role;
}

function modification_compte($id, $nick, $password, $mail, $user)
{
    global $c;
    $sql = "UPDATE `users` SET `mdp` = '" . $password . "', `email` = '" . $mail . "', `nick` = '" . $nick . "' WHERE `users`.`id` = '" . $id . "'";
    $sql2 = "UPDATE `media` SET `createur` = '" . $nick . "' WHERE `createur` = '" . $user . "'";
    //echo $sql;
    mysqli_query($c, $sql);
    mysqli_query($c, $sql2);
}

function suppression($id)
{
    global $c;
    $pseu = recup_nick_user($id);
    if (!recup_role($pseu) == "admin") {
        $sql = "DELETE FROM users WHERE id='" . $id . "'";
        $sql2 = "DELETE FROM  `commentaires` WHERE id_user='" . $id . "'";
        $user = recup_nick_user($id);
        $sql3 = "DELETE FROM  `media` WHERE createur='" . $user . "'";
        mysqli_query($c, $sql);
        mysqli_query($c, $sql2);
        mysqli_query($c, $sql3);
        session_destroy();
        header("location: index.php?page=confirm_suppr");
    } else
        echo "on peu pas supprimer le compte admin";
}
