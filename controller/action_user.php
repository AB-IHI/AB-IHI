<?php


// the obivious logging part


// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    // header("location: welcome.php");
    // $_SESSION['page'] = "home";
    //exit;
}

// Include config file
require_once "db.php";

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
                                    $_SESSION["id"] = $id;
                                    // $_SESSION["username"] = $username;

                                    // Redirect user to welcome page
                                    // header("location: welcome.php");
                                    $_SESSION['page'] = "volunteer";
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
// Include config file
require_once "db.php";

// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

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
            if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {

                // Prepare an insert statement
                $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

                if ($stmt = mysqli_prepare($c, $sql)) {
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

                    // Set parameters
                    $param_username = $username;
                    $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

                    // Attempt to execute the prepared statement
                    if (mysqli_stmt_execute($stmt)) {
                        // Redirect to login page
                        // header("location: login.php");
                        $_SESSION['page'] = 'login';
                    } else {
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