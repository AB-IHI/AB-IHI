<!--  -->
<?php
if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') { // test almost same if above


/*    header('Location: .');*/


}?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>volunteer</title>

    <link rel="stylesheet" type="text/css" href="css_js/css/bootstrap.css" />
    <!-- <link rel="stylesheet" type="text/css" href="css_js/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>  -->

    <link rel="stylesheet" type="text/css" href="css_js/style.css" />


</head>

<body class="mb-0">

    <!-- http://www.w3.org/2000/svg -->


    <container_main class="container">


        <h1>Informations personnel</h1>

        <a class="position-absolute top-0 end-0 deconnexion" href="?page=logout">Déconnexion</a>



        <header>

        </header>

        <container class="">
            <?php

            modification_compte();
            ?>
        </container>

            <container>
                <?php
                // var_dump($_SESSION['id_user']);
                // gettype($_SESSION['id_user']);
                $var = strval($_SESSION['id_user']);
                $sql = "SELECT * FROM users where users.id = $var";

                $result = mysqli_query($c, $sql);

                // 3/3 -> AFFICHAGE
                // Récupère chaque ligne de la BD dans un tableau "$row"






                // 3/3 -> AFFICHAGE
                // Récupère chaque ligne de la BD dans un tableau "$row"
                echo "<table class='table table-responsive table-hover w-100 d-block'>
      <tbody> ";
                echo "<tr class='margin'>";

                echo "<td class='margin'> pièce d'identité </td>";
                echo "<td class='margin'> date d'expiration de la pièce d'identité</td>";
                echo "<td class='margin'> nationalité </td>";
                echo "<td class='margin'> adresse </td>";
                echo "<td class='margin'> email </td>";
                echo "<td class='margin'> téléphone </td>";
                echo "</tr>";
                $i = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $i++;

                    echo "<tr class='margin'>";

                    $var3 = htmlspecialchars($row["passport"], ENT_QUOTES, 'UTF-8');
                    echo "<td class='margin'>" . $var3 . "</td>";
                    $var4 =    htmlspecialchars($row["date"], ENT_QUOTES, 'UTF-8');
                    echo "<td class='margin'>" . $var4 . "</td>";
                    $var5 = htmlspecialchars($row["pays"], ENT_QUOTES, 'UTF-8');
                    echo "<td class='margin'>" . $var5 . "</td>";
                    $var6 = htmlspecialchars($row["adress"], ENT_QUOTES, 'UTF-8');
                    echo "<td >" . $var6 . "</td>";
                    $var5 = htmlspecialchars($row["email"], ENT_QUOTES, 'UTF-8');
                    echo "<td class='margin'>" . $var5 . "</td>";
                    $var6 = htmlspecialchars($row["telephone"], ENT_QUOTES, 'UTF-8');
                    echo "<td >" . $var6 . "</td>";

                    echo "</tr>";
                }
                echo "</tbody>
    </table>";

                ?>


                <p> <a href=".?page=benevole">go back</a>.</p>
            </container>





    </container>
        <span class="spacer">
            </span>
        <!-- footer -->
        <container id="footer_" class="container sticky-bottom my-auto">
            <footer class="pt-4 mt-4 footer mt-auto sticky-bottom">


                <div class="d-flex justify-content-between py-4 my-4 border-top">
                    <!-- <p class="hidetitl">
            /*hidden when min width */
        © 2022 IHI asso
        </p> -->

                </div>
                <p class="text-center text-muted ">
                    <!--hidden when full width -->
                    © 2022 IHI asso
                </p>

            </footer>

        </container>
        </container_main>
</body>
<script type='text/javascript' src='css_js/js/popper.min.js'></script>
<script type='text/javascript' src='css_js/js/bootstrap.js'></script>
<script type='text/javascript' src='css_js/js/main.js'></script>

</html>