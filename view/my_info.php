<!--  -->

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





        <header>

        </header>

        <container class="">





            <form action="." method="post" class="signin-form">
                <input type="hidden" name="action" value="info_add">
                <div class="col-12">

                    <div class="col-12 <?php echo (!empty($passport_err)) ? 'has-error' : ''; ?>">
                        <input type="text" class="form-control btn-lg" name="passport" id="passport" value="<?php //echo $nom; 
                                                                                                            ?>" placeholder="pièce d'identité  " required="">
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

                <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">

                    <input type="email" name="email" class="form-control btn-lg" id="pw" value="<?php echo $email; ?>" placeholder=" email" required="">
                    <span class="help-block"><?php echo $email_err; ?></span>
                    <!-- <div class="invalid-feedback">
            email is required.-->
                </div>

                <div class="form-group <?php echo (!empty($telephone_err)) ? 'has-error' : ''; ?>">
                    <input type="text" class="form-control btn-lg" name="telephone" id="telephone" placeholder="N° telephone" required="">
                    <span class="help-block"><?php echo $telephone_err; ?></span>
                    <!-- <div class="invalid-feedback">
                        Please enter a telephone address.
                    </div> -->

                </div>

                <div class="form-group <?php echo (!empty($rib_err)) ? 'has-error' : ''; ?>">
                    <input type="text" class="form-control btn-lg" name="rib" id="rib" placeholder="RIB (facultatif)" >
                    <span class="help-block"><?php echo $rib_err; ?></span>
                    <!-- <div class="invalid-feedback">
                        Please enter a rib address.
                    </div> -->

                </div>




                <input type="submit" class=" cnx-sub btn_dem btn-lg mx-auto btn-outline-dark" value="enregistrer">

            </form>



            </div>





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
                echo "<td class='margin'> date expiration de la pièce d'identité</td>";
                echo "<td class='margin'> nationalité </td>";
                echo "<td class='margin'> adress </td>";
                echo "<td class='margin'> email </td>";
                echo "<td class='margin'> telephone </td>";
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
<script type='text/javascript' src='css_js/js/JavaScript.js'></script>

</html>