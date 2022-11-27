<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>volunteer</title>

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
                <right_div class="right_div">

                    <p id="h2_assoc" class="h2">
                        Liste des dossiers en cours
                    </p>
                    <?php
                    $sql = "SELECT * FROM dossier Where id_benevole =". $_SESSION['id_user'] ."";
                    // var_dump($sql);
                    $result = mysqli_query($c, $sql);


                    // 3/3 -> AFFICHAGE
                    // Récupère chaque ligne de la BD dans un tableau "$row"
                    echo "<table class='table table-responsive table-hover w-100 d-block'>
  <tbody> ";
                    echo "<tr class='margin'>";
                    echo "<td class='margin center'> # </td>";
                    echo "<td class='margin'> dossier </td>";

                    echo "</tr>";
                    // $i = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        // $i++;

                        echo "<tr class='margin'>";
                        $var2 = htmlspecialchars($row["id"], ENT_QUOTES, 'UTF-8');
                        echo "<td class='margin'>" . $var2 . "</td>";
                        $var3 = htmlspecialchars($row["nom"], ENT_QUOTES, 'UTF-8');
                        echo "<td class='margin'><a href=?id_benef=" .$var2 .">
                            " .
                            $var3
                            . "
                        </a></td>";



                        echo "</tr>";
                    }
                    echo "</tbody>
</table>";
                    ?>
            <form action="." method="post" class="signin-form">
                <input type="hidden" name="action" value="cree_fldr">
                <div class="col-12">

                    <div class="col-12 <?php echo (!empty($nom_folder_err)) ? 'has-error' : ''; ?>">
                        <input type="text" class="form-control btn-lg" name="nom_fldr" id="nom_fldr" value="<?php //echo $nom; 
                                                            ?>" placeholder="  " required="">
                        <span class="help-block"><?php echo $nom_folder_err; 
                                                    ?></span>
                        <!-- <div class="invalid-feedback ">
                            passeport is required.
                        </div> -->

                        
                    </div>

                </div>


                <input type="submit" class=" cnx-sub btn_dem btn-lg mx-auto btn-outline-dark" value="créer dossier">

            </form>




                </right_div>
                <div class="column hidetitl">
                    <!--hidden when min width -->
                    <div>
                        <!-- <h1 class="">
            INITIATIVE HUMANITAIRE INTERNATIONALE
        </h1> -->

                    </div>
                </div>
            </div>

            <div class="b">
                <h1 class="">
                    Volontaire
                </h1>
                <?php
                if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') { // test almost same if above

                    echo '<a href="?page=admin">Admin</a>';


                }
                ?>

                <left_div>
                    
                    <div>
                        <?php
                        // $sql = "SELECT * FROM tireurs";

                        // $result = mysqli_query($c, $sql);
                        ?>

<container>
                <?php
                // var_dump($_SESSION['id_user']);
                // gettype($_SESSION['id_user']);
                $var = strval($_SESSION['id_user']);


                
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

                    include_once "upload.php";

                echo "<h2><a href='.?page=my_info'>Mes informations</a>.</h2>";
                
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
                    <td class='margin'> adresse </td>     
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
                $i = 0;

                    $i++;

                    echo "<tr class='margin'>";

                    
                    
                   
                    
                    
                    

                    echo "</tr>";
                
                echo "</tbody>
    </table>";

                ?>


                <p> <a href="#">top</a>.</p>

                <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
  <label class="form-check-label" for="flexCheckCheckedDisabled">
  J'ai pris connaissance du <a class="" href="y_storage/Règlement sur les bénévoles.pdf">
                    Reglement sur les benevoles
                </a> et je m'engage à le respecter
  </label>
</div>
    
                <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
  <label class="form-check-label" for="flexCheckCheckedDisabled">
  J'ai pris connaissance des conditions du <a href="y_storage/1. L'aube de l'espoir.pdf">
                    projet de bienfaisance
                </a>, <a href="y_storage/1.%20Protection%20temporaire.pdf">programme humanitaire</a>  et je m'engage à les respecter
  </label>
                </div>
    
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
  <label class="form-check-label" for="flexCheckCheckedDisabled">
  J'ai pris connaissance des conditions du <a href="y_storage/1. Règlement sur les PB et les PH.pdf">
                Règlement sur les projets de bienfaisance et les programmes humanitaires
                </a> et je m'engage à les respecter
  </label>
</div>
            </container>






                        



                    </div>
                </left_div>
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