
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
                    <img id="main_pic" src="palm_of_hand_6.png">
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

                echo "<td class='margin'> pièce d'identité </td>";
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

                <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
  <label class="form-check-label" for="flexCheckCheckedDisabled">
    Disabled checked checkbox
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
  <label class="form-check-label" for="flexCheckCheckedDisabled">
    Disabled checked checkbox
  </label>
</div>
            </container>






                        <form action="." method="post" class="signin-form">
                            <input type="hidden" name="action" value="register">
                            <div class="col-12">

                                <div class="col-12 <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                    <input type="text" class="form-control btn-lg" id="nom" value="<?php //echo $nom; 
                                                                                                    ?>" placeholder=" nom" required="">
                                    <span class="help-block"><?php echo $username_err; ?></span>
                                    <div class="invalid-feedback ">
                                        nom is required.
                                    </div>

                                    <input type="text" class="form-control btn-lg" id="prenom" placeholder="prenom" required="">
                                    <div class="invalid-feedback ">
                                        prenom is required.
                                    </div>
                                </div>

                                <h2><a href=".?page=my_info">Mes informations </a>.</h2>

                                <div class="col-12 <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">

                                    <input type="text" name="username" class="form-control btn-lg" id="nick" value="<?php echo $username; ?>" placeholder="pseudo" required="">
                                    <span class="help-block"><?php echo $username_err; ?></span>
                                    <!-- <div class="invalid-feedback ">
                nick is required.-->
                                </div>
                                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">

                                    <input type="password" name="password" class="form-control btn-lg" id="pw" value="<?php echo $password; ?>" placeholder=" mot de passe" required="">
                                    <span class="help-block"><?php echo $password_err; ?></span>
                                    <!-- <div class="invalid-feedback">
                Valid mot de passe is required.-->
                                </div>
                                <!-- <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">

        <input type="password" name="confirm_password" class="form-control btn-lg" id="confirm_pw" value="<?php echo $confirm_password; ?>" placeholder="mot de passe" required="">
        <span class="help-block"><?php echo $confirm_password_err; ?></span>
    </div> -->
                            </div>





                            <div class="col-12 ">


                            </div>

                            <div class="col-12 ">

                                <input type="text" class="form-control btn-lg" id="email" placeholder="email" required="">
                                <div class="invalid-feedback">
                                    Please enter a email address.
                                </div>
                            </div>

                            <div class="col-12 ">


                            </div>




                            <input type="submit" class=" cnx-sub btn_dem btn-lg mx-auto btn-outline-dark" value="creer">
                            <!-- <p>Already have an account? <a href=".?page=">Login here</a>.</p> -->
                        </form>



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
<script type='text/javascript' src='../css_js/js/popper.min.js'></script>
<script type='text/javascript' src='../css_js/js/bootstrap.js'></script>
<script type='text/javascript' src='../css_js/js/JavaScript.js'></script>

</html>