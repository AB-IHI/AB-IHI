<?php

if (isset($_GET["id_benef"])) {
    $id_benef = $_GET["id_benef"];
    // Validate username
    if (empty(trim($_GET["id_benef"]))) {
        $id_benef_err = "Please enter stop doing this.";
    } else {
        // Prepare a select statement
        $sql = "SELECT *
        FROM dossier
        INNER JOIN dossier ON dossier.key = users.key
        WHERE $id_benef = ?";

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
//                var_dump($stmt);
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    $_SESSION['id_benef'] = $_GET['id_benef']; // $id is now defined
    };

