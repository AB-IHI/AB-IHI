<?php
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') { // test almost same if above


    header('Location: .?page=logout');


}?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Admin</title>

    <link rel="stylesheet" type="text/css" href="css_js/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css_js/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>

    <link rel="stylesheet" type="text/css" href="css_js/style.css" />


</head><!--  -->



<body class="mb-0">

<!-- http://www.w3.org/2000/svg -->


<container_main class="container">


    <h1>Admin</h1>

    <a class="position-absolute top-0 end-0 deconnexion" href="?page=logout">Déconnexion</a>



    <header>

    </header>

    <container_main class="container">



        <container>
            <div class="respsv_cell">
            <?php
            $sql = "SELECT id, nom, prenom FROM users";
            $result = mysqli_query($c, $sql);
            echo "<cell class='hide_title'><h2>id</h2></cell>";
            echo "<cell class='hide_title'><h2>nom</h2></cell>";
            echo "<cell class='hide_title'><h2>prenom</h2></cell>";
            while ($row = mysqli_fetch_assoc($result)) {
            // $i++;
                $var2 = htmlspecialchars($row["id"], ENT_QUOTES, 'UTF-8');
                echo "<cell><h2 class='offcanvas-header'>id</h2>
                    <a href='?page=a_view_usr&a_v_usr=" . $var2 . "'>" . $var2 . "</a>
           </cell>";
                $var3 = htmlspecialchars($row["nom"], ENT_QUOTES, 'UTF-8');
                echo "<cell><h2 class='offcanvas-header'>nom</h2>
                    <p>" . $var3 . "</p>
           </cell>";
                $var4 = htmlspecialchars($row["prenom"], ENT_QUOTES, 'UTF-8');
                echo "<cell><h2 class='offcanvas-header'>prenom</h2>
                    <p>" . $var4 . "</p>
           </cell> ";

            }
            ?>
           

           </div>
            <p> <a href=".?page=benevole">go back</a>.</p>
        </container>


        <span class="spacer"><!-- spacer pushes div footer down so its not in the middle of page, needed when there is not enough text to fill page --></span>

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