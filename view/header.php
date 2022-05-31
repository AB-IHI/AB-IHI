<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />

</head>

<body>
    <container class="container">
        <span class="screen-darken"></span>

        <!-- Ninja nav-bar at the top, ninja means it adapts to mobile -->

        <nav id="navbar_top" class="mobile-offcanvas navbar navbar-expand-lg navbar-light    bg-light border-bottom">
            <div class="container-fluid hstack gap-5">
                <div class="offcanvas-header">
                    <button class="btn-close float-end btn-xl-right "></button>
                </div>

                <div class="bg-light col-md-1">
                    <!--Left space (col-md-1) automatically pushes to the right until equilibrium with the 2 ms-auto on the right-->
                </div>
                <ul class="navbar-nav">



                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> IHI </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item go_to_section" href="#quiSN"> Qui sommes nous </a>

                            </li>
                            <li><a class="dropdown-item go_to_section" href="#progH">Programmes </a></li>
                            <li><a class="dropdown-item go_to_section" href="#ofs">Contactez nous </a></li>

                        </ul>
                    </li>
                </ul>

                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Donateurs </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"> Mécènes </a></li>
                            <li><a class="dropdown-item" href="#"> Sponsors </a></li>

                        </ul>
                    </li>
                </ul>

                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Bénéficiaires </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"> Comment devenir</a></li>
                            <li><a class="dropdown-item" href="#"> Reglementation </a></li>

                        </ul>
                    </li>
                </ul>

                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> FAQ </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"> </a></li>
                            <li><a class="dropdown-item" href="#"> </a></li>

                        </ul>
                    </li>
                </ul>



                <ul class="navbar-nav ms-auto">
                    <!--right space (ms-auto) automatically pushes to the left until equilibrium with the 1st ms-auto on the left-->
                    <li class="nav-item"><a href="#" class="nav-link link-dark px-2 small">English</a></li>
                </ul>

                <ul class="nav ">

                </ul>

            </div> <!-- container-fluid.// -->
        </nav>
        <button data-trigger="navbar_top" id="button_menu" class="d-lg-none btn btn-warning beige btn-xl" type="button"> Menu </button>


        <!--  First nav-bar with links and language -->



        <!--   second nav-bar with search and LOGIN-->
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
                <ul class="nav">
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle float-end light-gray" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Connexion
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Entrer</a></li>
                                <li><a class="dropdown-item" href="#">Créer mon compte</a></li>

                            </ul>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>



        <header>

        </header>

        <container>


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


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Qui sommes nous </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"> Équipe </a></li>
                                <li><a class="dropdown-item" href="#"> Objectifs </a></li>
                                <li><a class="dropdown-item" href="#"> Législation </a>

                                </li>
                                <li><a class="dropdown-item" href="#"> </a></li>

                            </ul>
                        </li>

                    </ul>



                    <ul class="navbar-nav">

                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Programmes </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"> Socials </a></li>
                                <li><a class="dropdown-item" href="#"> Droits de l'Homme </a></li>
                                <li><a class="dropdown-item" href="#"> Environnemental </a></li>
                            </ul>
                        </li>

                    </ul>

                    <ul class="navbar-nav">

                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Office </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"> Organigramme </a></li>
                                <li><a class="dropdown-item" href="#"> Personnel </a></li>
                                <li><a class="dropdown-item" href="#"> Contact </a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="navbar-nav">

                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> FAQ </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"> </a></li>
                                <li><a class="dropdown-item" href="#"> </a></li>

                            </ul>
                        </li>
                    </ul>



                    <ul class="navbar-nav ms-auto">
                        <!--right space (ms-auto) automatically pushes to the left until equilibrium with the 1st ms-auto on the left-->

                    </ul>

                </div> <!-- container-fluid.// -->
            </nav>