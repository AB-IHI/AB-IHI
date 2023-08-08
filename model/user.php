<?php
//M : Modèle = ensemble de fonctions (chargement, affichages, ajout dans la base de données, ...).


function pic_db($c, $file_name )
{


    // Prepare an insert statement UPDATE `users` SET `date` = '11/01/02' WHERE `users`.`id` = 4;

    $sql = "UPDATE users SET photo =? WHERE users.id=?";

    if ($stmt = mysqli_prepare($c, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "ss", $photo, $_SESSION['id_user']);

        // Set parameters, useless
        $photo = $file_name;
        // $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Redirect to login page
            // header("location: login.php");
//            $_SESSION['page'] = 'benevole';
            echo "added to db";
//            var_dump($stmt);
        } else {
            echo "2Something went wrong. Please try again later.";
//            var_dump($stmt);
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    // mysqli_close($c);
//    var_dump($stmt);


}


function dispo_in_db($email, $type, $c)
{
    // Prepare a select statement
    $sql = "SELECT id FROM users WHERE " . $type . " = ?";
    /*var_dump($sql);*/
    $stmt = mysqli_prepare($c, $sql);
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "s", $param_type);
//    var_dump($sql);
    // Set parameters
    $param_type = trim($email);

    // Attempt to execute the prepared statement
    if (mysqli_stmt_execute($stmt)) {
        /* store result */
        mysqli_stmt_store_result($stmt);
//        var_dump(mysqli_stmt_num_rows($stmt));
        return mysqli_stmt_num_rows($stmt) == 1;
    }
    // Close statement
    mysqli_stmt_close($stmt);
}

function ajouterUserInfo($c)
{
    global $c;
}

function check_not_admin()
{   //this function checks that role is not admin
    if ($_SESSION['role'] !== 'admin') {
        die('You do not have permission to perform this action.');
    }
}
function update_role($c)
{
    // Check if user is logged in as admin
    if ($_SESSION['role'] !== 'admin') {
        die('You do not have permission to perform this action.');
    }

// Get user ID and new role from form submission
    $user_id = $_SESSION['a_v_usr'];
    $new_role = $_POST['new_role'];

// Make sure user cannot be updated to admin role
    if ($new_role === 'admin') {
        die('You cannot update a user to an admin role.');
    }

// Connect to database
    /*$servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "myDB";

    $c = new mysqli($servername, $username, $password, $dbname);
    */

// Check connection
    if ($c->connect_error) {
        die("Connection failed: " . $c->connect_error);
    }

// Prepare and execute SQL statement to update user role
    $stmt = $c->prepare("UPDATE users SET role = ? WHERE id = ?");
    $stmt->bind_param("si", $new_role, $user_id);
    $stmt->execute();

// Check if update was successful
    if ($stmt->affected_rows > 0) {
        echo "User role updated successfully.";
    } else {
        echo "Error updating user role: " . $c->error;
    }

// Close database connection
    $stmt->close();
    //$c->close();
}

function recup_role($user)
{   /*should take in current user of session and return bolean, however variable of user role if already stored*/
    global $c;
    $sql = "SELECT `role` FROM `users` WHERE nick = '$user'";
    $resultat = mysqli_query($c, $sql);
    $row = mysqli_fetch_assoc($resultat);
    $role = $row["role"];
    return $role;
}

// old functions *****************************************************************************************************

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

function recup_role_old($user)
{
    global $c;
    $sql = "SELECT `role` FROM `users` WHERE nick = '$user'";
    $resultat = mysqli_query($c, $sql);
    $row = mysqli_fetch_assoc($resultat);
    $role = $row["role"];
    return $role;
}

function modification_compte()
{            /* Define variables and initialize with empty values*/
    $passport = $date = $pays = $adress = $email = $rib = $telephone = "";
    $passport_err = $date_err = $pays_err = $adress_err = $email_err = $rib_err = $telephone_err = "";

   ?> <form action="." method="post" class="signin-form">
                <input type="hidden" name="action" value="info_add">
                <div class="col-12">

                    <div class="col-12 <?php echo (!empty($passport_err)) ? 'has-error' : ''; ?>">
                        <input type="text" class="form-control btn-lg" name="passport" id="passport" value="<?php //echo $nom;
                                                                                                            ?>" placeholder="pièce d'identité 12 characters " required="">
                        <span class="help-block"><?php echo $passport_err;
                                                    ?></span>
<!-- <div class="invalid-feedback ">
    passeport is required.
</div> -->

<input type="text" class="form-control btn-lg" name="date" id="date" placeholder="date expiration de la pièce d'identité" required="">
<span class="help-block"><?php echo $date_err;
    ?></span>
<!-- <div class="invalid-feedback ">
    date is required.
</div> -->
</div>


<div class="col-12 <?php echo (!empty($pays_err)) ? 'has-error' : ''; ?>">

    <input type="text" name="pays" class="form-control btn-lg" name="pays" id="pays" value="<?php //echo $pays;
    ?>" placeholder="nationalité" required="">
    <span class="help-block"><?php echo $pays_err;
        ?></span>
    <!-- <div class="invalid-feedback ">
pays is required.-->
</div>
<div class="form-group <?php echo (!empty($adress_err)) ? 'has-error' : ''; ?>">

    <input type="adress" name="adress" class="form-control btn-lg" name="adress" id="adress" value="<?php //echo $adress;
    ?>" placeholder=" adress" required="">
    <span class="help-block"><?php echo $adress_err;
        ?></span>
    <!-- <div class="invalid-feedback">
Valid adress is required.-->
</div>


</div>





<div class="col-12 ">


</div>

<!--<div class="form-group <?php /*echo (!empty($email_err)) ? 'has-error' : ''; */?>">
                    <input type="email" name="email" class="form-control btn-lg" id="pw" value="<?php /*echo $email; */?>" placeholder=" email" >
                    <span class="help-block"><?php /*echo $email_err; */?></span>
                    <div class="invalid-feedback">
            email is required.
                </div>-->



<div class="form-group <?php echo (!empty($rib_err)) ? 'has-error' : ''; ?>">
    <input type="text" class="form-control btn-lg" name="rib" id="rib" placeholder="IBAN facultatif 16characters" >
    <span class="help-block"><?php echo $rib_err; ?></span>
    <!-- <div class="invalid-feedback">
        Please enter a rib address.
    </div> -->

</div>




<input type="submit" class=" cnx-sub btn_dem btn-lg mx-auto btn-outline-dark" value="enregistrer">

</form> <?php
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
