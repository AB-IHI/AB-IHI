
<body class="mb-0">

<!-- http://www.w3.org/2000/svg -->


<container_main class="container">
    <span class="screen-darken"></span>







    <header>

    </header>

    <container class="">




        <div id="title_one" class="col-md-12">
            <div class=" column">
                <right_div class="right_div">

                    <p id="h2_assoc" class="h2">
                        Liste des dossiers en cours
                    </p>
                    <?php
                    $sql = "SELECT * FROM dossier";

                    $result = mysqli_query($c, $sql);


                    // 3/3 -> AFFICHAGE
                    // Récupère chaque ligne de la BD dans un tableau "$row"
                    echo "<table class='table table-responsive table-hover w-100 d-block'>
  <tbody> ";
                    echo "<tr class='margin'>";
                    echo "<td class='margin center'> # </td>";
                    echo "<td class='margin'> dossier </td>";

                    echo "</tr>";
                    $i = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $i++;

                        echo "<tr class='margin'>";
                        echo "<td class='margin'>" . $i . "</td>";
                        $var3 = htmlspecialchars($row["nom"], ENT_QUOTES, 'UTF-8');
                        echo "<td class='margin'>" . $var3 . "</td>";



                        echo "</tr>";
                    }
                    echo "</tbody>
</table>";
                    ?>

<!-- form if no rib then echo-->
<!-- <div action="." method="post" class="signin-form">
    <input type="hidden" name="action" value="add_rib">
            <div class="col-12">
        <div class="form-group <?php echo (!empty($rib_err)) ? 'has-error' : ''; ?>">
                      <label for=""> pour remboursement les depenses du benevole entrez votre RIB</label>  
        <input type="rib" name="rib" class="form-control btn-lg" id="pw" value="<?php echo $rib; ?>" placeholder=" rib" required="">
        <span class="help-block"><?php echo $rib_err; ?></span>
        
        </div>
      <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </div>
</div> -->



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

            <div class="column">
                <h1 class="">
                    Benevole
                </h1>
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

echo '                <svg xmlns="http://www.w3.org/2000/svg" width="160" height="160" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
</svg>';
                
?>

<form action="."  method="post">
    <div class="mb-3" >
    <input type="hidden" name="action" value="info_update_photo">
      <label for="formFile" class="form-label">Ajouter photo</label>
      <input class="form-control" type="file" id="formFile">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

<?php

$sql = "SELECT * FROM users where users.id = $var";

                $result = mysqli_query($c, $sql);

                // 3/3 -> AFFICHAGE
                // Récupère chaque ligne de la BD dans un tableau "$row"






                // 3/3 -> AFFICHAGE
                // Récupère chaque ligne de la BD dans un tableau "$row"
                $row = mysqli_fetch_assoc($result);

                echo "<h2><a href='.?page=my_info'>Mes informations</a>.</h2>";
                
                echo "<table class='table table-responsive table-hover w-100 d-block'>
      <tbody> ";
                echo "<tr class='margin'>";

                $var1 = htmlspecialchars($row["prenom"], ENT_QUOTES, 'UTF-8');
                echo "<td class='margin'>" . $var1 . "  </td>";
                $var2 = htmlspecialchars($row["nom"], ENT_QUOTES, 'UTF-8');
                echo "<td class='margin'>" . $var2 . "</td> </tr>";

                echo "<td class='margin'> pièce d'identité, N°</td>";
                $var3 = htmlspecialchars($row["passport"], ENT_QUOTES, 'UTF-8');
                echo "<td class='margin'>" . $var3 . "</td> </tr>";

                echo "<tr class='margin'>
                    <td class='margin'> date expiration de la pièce d'identité</td>
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
                    <td class='margin'> telephone </td>  
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

               
            </container>






                        



                    </div>
                </left_div>
            </div>


        </div>


        </div>



    </container>



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