<?php





// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    // header("location: welcome.php");
    // $_SESSION['page'] = "home";
    //exit;
}

// update user info / add more personal data

if (isset($_POST["action"])) {
    if ($_POST["action"] == "info_add") {
        // Define variables and initialize with empty values
        $passport = $date = $pays = $adress = $email = $telephone = "";
        $passport_err = $date_err = $pays_err = $adress_err = $email_err = $telephone_err = "";



        $_SESSION['page'] = "my_info";
        // Processing form data when form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {



            // Validate passport
            if (empty(trim($_POST["passport"]))) {
                $passport_err = "Please enter a passport.";
            } elseif (strlen(trim($_POST["passport"])) < 3) {
                $passport_err = "Passport must have atleast 3 characters.";
            } else {
                $passport = trim($_POST["passport"]);
            }

            // Validate date
            if (empty(trim($_POST["date"]))) {
                $date_err = "Please enter a date.";
            } elseif (strlen(trim($_POST["date"])) < 3) {
                $date_err = "date must have atleast 3 characters.";
            } else {
                $date = trim($_POST["date"]);
            }

            // Validate pays
            if (empty(trim($_POST["pays"]))) {
                $pays_err = "Please enter a pays.";
            } elseif (strlen(trim($_POST["pays"])) < 3) {
                $pays_err = "pays must have atleast 3 characters.";
            } else {
                $pays = trim($_POST["pays"]);
            }

            // Validate adress
            if (empty(trim($_POST["adress"]))) {
                $adress_err = "Please enter a adress.";
            } elseif (strlen(trim($_POST["adress"])) < 3) {
                $adress_err = "adress must have atleast 3 characters.";
            } else {
                $adress = trim($_POST["adress"]);
            }

            // Validate email
            if (empty(trim($_POST["email"]))) {
                $email_err = "Please enter a email.";
            } elseif (strlen(trim($_POST["email"])) < 3) {
                $email_err = "email must have atleast 3 characters.";
            } else {
                $email = trim($_POST["email"]);
            }

            // Validate telephone
            if (empty(trim($_POST["telephone"]))) {
                $telephone_err = "Please enter a telephone.";
            } elseif (strlen(trim($_POST["telephone"])) < 3) {
                $telephone_err = "telephone must have atleast 3 characters.";
            } else {
                $telephone = trim($_POST["telephone"]);
            }

            // Check input errors before inserting in database
            if (empty($passport_err) && empty($date_err) && empty($pays_err) && empty($adress_err) && empty($email_err) && empty($telephone_err)) {

                // Prepare an insert statement UPDATE `users` SET `date` = '11/01/02' WHERE `users`.`id` = 4; 

                $sql = "UPDATE users SET passport =?, date=?, pays=?, adress=?, email=?, telephone=?  WHERE users.id=?";

                if ($stmt = mysqli_prepare($c, $sql)) {
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "sssssss", $passport, $date, $pays, $adress, $email, $telephone, $_SESSION['id_user']);

                    // Set parameters, useless
                    // $param_username = $username;
                    // $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

                    // Attempt to execute the prepared statement
                    if (mysqli_stmt_execute($stmt)) {
                        // Redirect to login page
                        // header("location: login.php");
                        $_SESSION['page'] = 'benevole';
                    } else {
                        echo "2Something went wrong. Please try again later.";
                    }

                    // Close statement
                    mysqli_stmt_close($stmt);
                }
            }

            // Close connection
            // mysqli_close($c);
        }
    }
}


// the obivious logging part

// Define variables and initialize with empty values

$_SESSION["username"] = "";
$password = "";
$username_err = $password_err = "";

if (isset($_POST["action"])) {
    if ($_POST["action"] == "login") {
        $_SESSION['page'] = "login";
        // Processing form data when form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Check if username is empty
            if (empty(trim($_POST["username"]))) {
                $username_err = "Please enter username.";
            } else {
                $_SESSION["username"] = trim($_POST["username"]);
            }

            // Check if password is empty
            if (empty(trim($_POST["password"]))) {
                $password_err = "Please enter your password.";
            } else {
                $password = trim($_POST["password"]);
            }

            // Validate credentials
            if (empty($username_err) && empty($password_err)) {
                // Prepare a select statement
                $sql = "SELECT id, username, password FROM users WHERE username = ?";

                if ($stmt = mysqli_prepare($c, $sql)) {
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "s", $param_username);

                    // Set parameters
                    $param_username = $_SESSION["username"];

                    // Attempt to execute the prepared statement
                    if (mysqli_stmt_execute($stmt)) {
                        // Store result
                        mysqli_stmt_store_result($stmt);

                        // Check if username exists, if yes then verify password
                        if (mysqli_stmt_num_rows($stmt) == 1) {
                            // Bind result variables
                            mysqli_stmt_bind_result($stmt, $id, $_SESSION["username"], $hashed_password);
                            if (mysqli_stmt_fetch($stmt)) {
                                if (password_verify($password, $hashed_password)) {
                                    // Password is correct, so start a new session
                                    //session_start();

                                    // Store data in session variables
                                    $_SESSION["loggedin"] = true;
                                    $_SESSION["id_user"] = $id;
                                    // $_SESSION["username"] = $username;

                                    // Redirect user to volunteer page
                                    // header("location: view/volunteer.php");
                                    $_SESSION['view'] = 'volunteer';
                                    $_SESSION['page'] = "benevole";
                                    echo "executed 1";
                                } else {
                                    // Display an error message if password is not valid
                                    $password_err = "The password you entered was not valid.";
                                    $_SESSION['page'] = "login";
                                    echo "executed 2";
                                }
                            }
                        } else {
                            // Display an error message if username doesn't exist
                            $username_err = "No account found with that username.";
                            $_SESSION['page'] = "login";
                            echo "executed 3";
                        }
                    } else {
                        echo "Oops! Something went wrong. Please try again later.";
                        $_SESSION['page'] = "login";
                        echo "executed 4";
                    }

                    // Close statement
                    mysqli_stmt_close($stmt);
                }
            }

            // Close connection
            // mysqli_close($c);
        }
    }
}
?>
<!-- end of logging -->


<!-- register -->

<?php


// Define variables and initialize with empty values
$username = $nom = $prenom = $email = $password = $confirm_password = "";
$username_err = $nom_err = $prenom_err = $email_err = $password_err = $confirm_password_err = "";

if (isset($_POST["action"])) {
    
    if ($_POST["action"] == "register") {
        $_SESSION['page'] = "register";
        // Processing form data when form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Validate username
            if (empty(trim($_POST["username"]))) {
                $username_err = "Please enter a username.";
            } else {
                // Prepare a select statement
                $sql = "SELECT id FROM users WHERE username = ?";

                if ($stmt = mysqli_prepare($c, $sql)) {
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "s", $param_username);

                    // Set parameters
                    $param_username = trim($_POST["username"]);

                    // Attempt to execute the prepared statement
                    if (mysqli_stmt_execute($stmt)) {
                        /* store result */
                        mysqli_stmt_store_result($stmt);

                        if (mysqli_stmt_num_rows($stmt) == 1) {
                            $username_err = "This username is already taken.";
                        } else {
                            $username = trim($_POST["username"]);
                        }
                    } else {
                        echo "1Oops! Something went wrong. Please try again later.";
                        var_dump($stmt);
                    }

                    // Close statement
                    mysqli_stmt_close($stmt);
                }
            }

            // Validate password
            if (empty(trim($_POST["password"]))) {
                $password_err = "Please enter a password.";
            } elseif (strlen(trim($_POST["password"])) < 3) {
                $password_err = "Password must have atleast 3 characters.";
            } else {
                $password = trim($_POST["password"]);
            }

            // Validate nom
            if (empty(trim($_POST["nom"]))) {
                $nom_err = "Please enter a nom.";
            } elseif (strlen(trim($_POST["nom"])) < 2) {
                $nom_err = "nom must have atleast 2 characters.";
            } else {
                $nom = trim($_POST["nom"]);
            }
            var_dump($password_err);
            // Validate prenom
            if (empty(trim($_POST["prenom"]))) {
                $prenom_err = "Please enter a prenom.";
            } elseif (strlen(trim($_POST["prenom"])) < 2) {
                $prenom_err = "prenom must have atleast 2 characters.";
            } else {
                $prenom = trim($_POST["prenom"]);
            }

            // Validate confirm reglement
            if (empty(trim($_POST["reglement"]))) {
                $reglement_err = "Please confirm reglement.";
            }

            // Validate confirm conditions
            if (empty(trim($_POST["condition"]))) {
                $conditions_err = "Please confirm conditions.";
            }

            // Validate email
            if (empty(trim($_POST["email"]))) {
                $email_err = "Please enter a email.";
            }
            else {
                $email = trim($_POST["email"]);
                if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    // valid address
                    if(dispo_email($email)==false) {
                        // unavailable address
                        $email_err = "Adresse email indisponible";
                    }  
                }
                else {
                    // invalid address
                    $email_err = "Please enter valid email.";
                }
    
            }

            
            
            // Validate confirm password
            // if (empty(trim($_POST["confirm_password"]))) {
            //     $confirm_password_err = "Please confirm password.";
            // } else {
            //     $confirm_password = trim($_POST["confirm_password"]);
            //     if (empty($password_err) && ($password != $confirm_password)) {
            //         $confirm_password_err = "Password did not match.";
            //     }
            // }

            // Check input errors before inserting in database
            if (empty($username_err) && empty($password_err) && empty($nom_err) 
            && empty($prenom_err) && empty($condition_err) && empty($reglement_err)) {

                // Prepare an insert statement
                $sql = "INSERT INTO users (username, password, nom, prenom, email) VALUES (?, ?, ?, ?, ?)";

                if ($stmt = mysqli_prepare($c, $sql)) {
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "sssss", $param_username, $param_password, $param_nom, $param_prenom, $param_email);

                    // Set parameters
                    $param_username = $username;
                    $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
                    $param_nom = $nom;
                    $param_prenom = $prenom;
                    $param_email = $email;
                    // Attempt to execute the prepared statement
                    if (mysqli_stmt_execute($stmt)) {
                        // Redirect to login page
                        // header("location: login.php");
                        $_SESSION['page'] = 'login';
                        echo "executed 1";
                    } else {
                        echo "executed 2";
                        echo "2Something went wrong. Please try again later.";
                    }

                    // Close statement
                    mysqli_stmt_close($stmt);
                }
            }

            // Close connection
            mysqli_close($c);
        }
    }
}

?>

<!-- end of register -->

<!-- reset_password -->

<?php


// Check if the user is logged in, if not then redirect to login page
// if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
//     header("location: login.php");
//     exit;
// }

// Include config file
require_once "db.php";

// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";

if (isset($_POST["action"])) {
    if ($_POST["action"] == "reset") {
        $_SESSION['page'] = "reset";
        // Processing form data when form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Validate new password
            if (empty(trim($_POST["new_password"]))) {
                $new_password_err = "Please enter the new password.";
            } elseif (strlen(trim($_POST["new_password"])) < 6) {
                $new_password_err = "Password must have atleast 6 characters.";
            } else {
                $new_password = trim($_POST["new_password"]);
            }

            // Validate confirm password
            if (empty(trim($_POST["confirm_password"]))) {
                $confirm_password_err = "Please confirm the password.";
            } else {
                $confirm_password = trim($_POST["confirm_password"]);
                if (empty($new_password_err) && ($new_password != $confirm_password)) {
                    $confirm_password_err = "Password did not match.";
                }
            }

            // Check input errors before updating the database
            if (empty($new_password_err) && empty($confirm_password_err)) {
                // Prepare an update statement
                $sql = "UPDATE users SET password = ? WHERE id = ?";

                if ($stmt = mysqli_prepare($c, $sql)) {
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);

                    // Set parameters
                    $param_password = password_hash($new_password, PASSWORD_DEFAULT);
                    $param_id = $_SESSION["id"];

                    // Attempt to execute the prepared statement
                    if (mysqli_stmt_execute($stmt)) {
                        // Password updated successfully. Destroy the session, and redirect to login page
                        session_destroy();
                        // header("location: login.php");
                        $_SESSION['page'] = "login";
                        exit();
                    } else {
                        echo "Oops! Something went wrong. Please try again later.";
                    }

                    // Close statement
                    mysqli_stmt_close($stmt);
                }
            }

            // Close connection
            mysqli_close($c);
        }
    }
}

// end of reset password
