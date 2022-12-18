<?php
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') { // test almost same if above


    header('Location: .?page=logout');


}?>
    <!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>info_user</title>

    <link rel="stylesheet" type="text/css" href="css_js/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css_js/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>

    <link rel="stylesheet" type="text/css" href="css_js/style.css" />


</head>
<body class="mb-0">

<!-- http://www.w3.org/2000/svg -->


<container_main class="container">
    <span class="screen-darken"></span>







    <header>

    </header>

    <container_main class="container">

        <a class="position-absolute top-0 end-0 deconnexion" href="?page=logout">Déconnexion</a>


        <container_i id="title_one" class="col-md-12 reverse container_i">
            <div class="a">

                <div class="column hidetitl">
                    <!--hidden when min width -->
                    <div>


                    </div>
                </div>
            </div>


                <h1 class="">
                    Informations utilisateur
                </h1>


                    <div>


<container>
                <?php
                $var = strval($_SESSION['a_v_usr']);



?>




<?php

$sql = "SELECT * FROM users where users.id = $var";

                $result = mysqli_query($c, $sql);

                mysqli_close($c);

                // 3/3 -> AFFICHAGE
                // Récupère chaque ligne de la BD dans un tableau "$row"






                // 3/3 -> AFFICHAGE
                // Récupère chaque ligne de la BD dans un tableau "$row"
                $row = mysqli_fetch_assoc($result);
            $photo = htmlspecialchars($row["photo"], ENT_QUOTES, 'UTF-8');
echo '<img class= "responsive" src="uploads/'. $photo  .'" alt="My profile pic">';

                $prenom = htmlspecialchars($row["prenom"], ENT_QUOTES, 'UTF-8');

                $nom = htmlspecialchars($row["nom"], ENT_QUOTES, 'UTF-8');
                echo " <div class='mb-3 '>
                 <label for='formFile' class='form-label'>" . $prenom . " ". $nom ."</label></div>";



//                echo "<h2><a href='.?page=my_info'>Mes informations</a>.</h2>";

                echo "<table class='table table-responsive table-hover w-100 d-block'>
      <tbody> ";
                echo "<tr class='margin'>";




                echo "<td class='margin'> pièce d'identité, N°</td>";
                $var3 = htmlspecialchars($row["passport"], ENT_QUOTES, 'UTF-8');
                echo "<td class='margin'>" . $var3 . "</td> </tr>";

                echo "<tr class='margin'>
                    <td class='margin'> date d'expiration de la pièce d'identité</td>
                ";
                $var4 =    htmlspecialchars($row["date"], ENT_QUOTES, 'UTF-8');
                    echo "<td class='margin'>" . $var4 . "</td> </tr>";

                echo "<tr class='margin'>
                    <td class='margin'> nationalité </td>
                ";
                $var5 = htmlspecialchars($row["pays"], ENT_QUOTES, 'UTF-8');
                echo "<td class='margin'>" . $var5 . "</td>  </tr> ";

                echo "<tr class='margin'>
                    <td class='margin'> adress </td>     
                 ";
                $var6 = htmlspecialchars($row["adress"], ENT_QUOTES, 'UTF-8');
                    echo "<td >" . $var6 . "</td>  </tr> ";

                echo "<tr class='margin'>
                    <td class='margin'> email </td>      
                ";
                $var5 = htmlspecialchars($row["email"], ENT_QUOTES, 'UTF-8');
                    echo "<td class='margin'>" . $var5 . "</td>  </tr> ";

                echo "<tr class='margin'>
                    <td class='margin'> téléphone </td>  
               ";
                $var6 = htmlspecialchars($row["telephone"], ENT_QUOTES, 'UTF-8');
                    echo "<td >" . $var6 . "</td>";

                echo "</tr>";
                $var6 = htmlspecialchars($row["telephone"], ENT_QUOTES, 'UTF-8');
                echo "<td >" . $var6 . "</td>";

                echo "</tr>";
                $i = 0;

                    $i++;

                    echo "<tr class='margin'>";








                    echo "</tr>";

                echo "</tbody>
    </table>";

                ?>


                <p> <a href="?page=admin">retour</a>.</p>


            </container>










                    </div>

            </div>


        </container_i>


        </div>



    </container_main>



    <!-- footer -->
    <span class="spacer">
    </span>
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
<script type='text/javascript' src='css_js/main.js'></script>

</html>

<?php
echo "<!-- ";
var_dump($_SESSION['view']);
var_dump($_SESSION['page']);
var_dump($_SESSION['loggedin']);
echo 'something';
echo "--> ";
?>