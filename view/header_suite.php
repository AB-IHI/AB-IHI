<nav id="navbar_top" class="mobile-offcanvas navbar navbar-expand-lg navbar-light    bg-light border-bottom ms-auto">
    <div class="container-fluid hstack gap-5">
        <div class="offcanvas-header">
            <button class="btn-close float-end btn-xl-right "></button>
        </div>

        <div class="bg-light col-md-1">
            <!--Left space (col-md-1) automatically pushes to the right until equilibrium with the 2 ms-auto on the right-->
        </div>
<?php
include "inside_nav.php";
?>




        <ul class="navbar-nav ms-auto">
            <!--right space (ms-auto) automatically pushes to the left until equilibrium with the 1st ms-auto on the left-->
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2 small"></a></li>
        </ul>




    </div> <!-- container-fluid.// -->
</nav>


<!--  button above second nav-bar with search and LOGIN-->

<nav id="nav_top" class="py-2 bg-transparent border-bottom">
    <div class="container d-flex flex-wrap">
        <ul class="nav me-auto">
            <li class="nav-item">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </li>
        </ul>

        <!-- test area -->


        <?php
        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
            echo '<h2 id="welcome">compte de :      </h2> ';
            echo ' <button href="index.php?page=user_acc" class="btn btn-secondary dropdown-toggle float-end light-gray" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
' .    htmlspecialchars($_SESSION["username"]) .
                '</button>';

            echo '<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li>        <a href=".?page=reset_password" class="dropdown-item ">Reset Your Password</a></li>
    <li><a href=".?page=logout" class="dropdown-item">Sign Out of Your Account</a></li>
    </ul>
        ';
            // echo "<header><h1>Page d'administration</h1>";
        } else {
            echo '<ul class="nav">
    <li class="nav-item">
        <div class="dropdown">
            <button href="index.php?page=connexion" class=" btn btn-secondary dropdown-toggle float-end light-gray" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Connexion
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href=".?page=login">Entrer</a></li>
                <li><a class="dropdown-item" href=".?page=register">Créer mon compte</a></li>
            </ul>
        </div>
    </li>
</ul> ';
        }
        ?>






        <!-- end of test area -->



    </div>
</nav>



<header>

</header>

<container class="">


    <!--3rd navbar-->


    <button data-trigger="navbar_main" id="button_contenu" class="d-lg-none btn btn-warning beige " type="button"> Contenu </button>
    <!--  -->

    <nav id="navbar_main" class="mobile-offcanvas navbar navbar2 navbar-expand-lg navbar-light  bg-white">
        <div class="container-fluid hstack gap-3">
            <div class="offcanvas-header">
                <button class="btn-close float-end btn-xl-right "></button>
            </div>

            <div class="bg-light ms-auto">
                <!--Left space (ms-auto) automatically pushes to the right until equilibrium with the 2 ms-auto on the right-->
            </div>
            <ul class="navbar-nav">


                <li class="nav-item ">
                    <a class="nav-link  go_to_section" href="#quiSN" data-bs-toggle=""> Qui sommes nous </a>

                </li>

            </ul>



            <ul class="navbar-nav">

                <li class="nav-item ">
                    <a class="nav-link  go_to_section" href="#progH" data-bs-toggle=""> Programmes </a>

                </li>

            </ul>

            <ul class="navbar-nav">

                <li class="nav-item dropdown">
                    <a class="nav-link   go_to_section" href="#ofs" data-bs-toggle=""> Office </a>

                </li>
            </ul>

            <ul class="navbar-nav">

                <li class="nav-item dropdown">
                    <a class="nav-link   go_to_section" href="#contact" data-bs-toggle=""> Contactez nous </a>

                </li>
            </ul>

            <ul class="navbar-nav">

                <li class="nav-item dropdown">
                    <a class="nav-link   go_to_section" href="#" data-bs-toggle=""> FAQ </a>

                </li>
            </ul>



            <ul class="navbar-nav ms-auto">
                <!--right space (ms-auto) automatically pushes to the left until equilibrium with the 1st ms-auto on the left-->

            </ul>

        </div> <!-- container-fluid.// -->
    </nav>