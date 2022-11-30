<!-- <?php
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
?>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>-->
<?php
    echo '
        <a href=".?page=reset_password" class="btn btn-warning">Reset Your Password</a>
        <a href=".?page=logout" class="btn btn-danger">Sign Out of Your Account</a>
        ';
    echo "<header><h1>Page d'administration</h1>";
} else {
    echo ' <a href=".?page=login" class="btn btn-primary">Sign in</a>';
}
include_once "header.php";
?>

<div id="title_one" class="col-md-12">
    <div class=" column">
        <right_div class="right_div">

            <p id="h2_assoc" class="h2">
                Association de bienfaisance
            </p>
            <h1 class="">
                INITIATIVE HUMANITAIRE INTERNATIONALE
            </h1>

        </right_div>
        <div class="column hidetitl">
            <!--hidden when min width -->
            <div id="don">
                <a href="?page=options">
                    <button type="button" class="btn btn-primary btn-xl-center " id="button_one">
                        Je fais un don</button></a>

            </div>
        </div>
    </div>

    <div class="column">
        <left_div>
            <img id="main_pic" src="y_ymages/palm_of_hand_6.png">
        </left_div>
    </div>

    <div class="column  hid_btn_xl">
        <!--hidden when full width -->

        <a href="?page=options">
            <button type="button" class="btn btn-primary btn-xl-center " id="button_one">
                Je fais un don</button></a>
    </div>
</div>


</div>



</container>



<article class="article">
    <!-- container but this time with section -->

    <div class="container px-4 py-5 quisn" id="featured-3 ">
        <h4 id="quiSN" class="pb-3 border-bottom h2">Qui sommes nous ?</h4>
        <div class=" row-p g-4 py-1 row-cols-1 row-cols-lg-1">
            <div class="feature col">


                <p>Nous sommes une équipe de personnes passionnées par les idées de l’humanisme, de l’élargissement des opportunités de la solidarité,
                    de l'altruisme, de la générosité et de la charité.
                    Notre Association du <a href="y_storage/1. Loi du 1er juillet 1901 relative au contrat d'association - Légifrance.pdf">1er
                        juillet 1901</a> est une <a href="y_storage/personne morale.pdf">personne morale</a> dont les activités sont régies par les
                    <a href="y_storage/Statuts IHI.pdf">Statuts</a>, ainsi que les descriptions de poste du <a href="y_storage/Description du poste de trésorier de IHII.pdf">Trésorier
                    </a> et du <a href="y_storage/Descript.du poste de secrétaire de IHI.pdf">Secrétaire</a> du Bureau.
                </p>
                <a class="icon-link">

                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#chevron-right"></use>
                    </svg>
                </a>
            </div>


        </div>

    </div>

</article>

<article class="article2">
    <!-- container but this time with section -->

    <div class="container px-4 py-5 quisn" id="featured-3 ">
        <h4 id="progH" class="pb-2 border-bottom h2">Projets de bienfaisance et programmes humanitaires</h4>
        <div class=" row-p g-4 py-1 row-cols-1 row-cols-lg-1">

            <div class="feature col">


                <p>
                Les <a href="?explain=lau"> activités de bienfaisance</a> de l'Association sont menées dans le cadre de projets de bienfaisance – il s'agit d'actions n'ayant pas un caractère d'intérêt personnel, visant à améliorer les conditions de vie de personnes en situation précaire ou difficile.                </p>
                <p> Les situations précaires ou difficiles des personnes visées ne recouvrent pas systématiquement le niveau de ressources de ces personnes. Il peut s’agir du handicap, de la maladie, de l’isolement, de la vieillesse, de la discrimination, etc.
                </p>
                <p>
                L'<a href="y_storage/1. Protection temporaire.pdf">activité humanitaire</a> de l'Association consiste en:
                </p>

                <ul class="hide_list ">
                    <li class=" hide_list horiz_spacin" >
                    <p>
                        1)  mise en œuvre de programmes humanitaires visant les actions d'urgence ainsi que les actions requises en vue de la satisfaction
                        des besoins indispensables des populations en situation de détresse ou de misère et en vue de contribuer à leur insertion sociale;
                    </p></li>
                <li class="hide_list horiz_spacin" >
                <p>
                    2)  la promotion des idées d'humanisme, la coordination des efforts et l’interaction en matière de réponse humanitaire avec d'autres
                    associations, organismes internationaux et étatiques, ainsi qu'avec des administrations territoriales.
                </p></li>
                </ul>

            </div>


        </div>

    </div>

</article>

<article class="article3">
    <!-- container but this time with section -->

    <div class="container px-4 py-5 quisn" id="featured-3 ">
        <h4 id="ofs" class="pb-2 border-bottom h2">Office</h4>
        <div class=" row-p g-4 py-1 row-cols-1 row-cols-lg-1">

            <div class="feature col">


                <p>L'Office actuel est composé de bénévoles qui participent à la mise en œuvre de projets de bienfaisance dans le cadre du <a href="?explain=explanation">Règlement sur les bénévoles</a>. </p>
                <p> Le recrutement des volontaires est ouvert.</p>
                <p>Les activités et la structure de l’Office s’adaptent aux conditions des missions humanitaires.

                </p>

                </p>

            </div>

        </div>

    </div>

</article>

<div class="put_rght_div">
    <article class="article3">
        <!-- container but this time with section -->

        <div class="container px-4 py-5 quisn" id="featured-3 ">
            <h4 id="contact" class="pb-2 border-bottom h2">Contactez nous</h4>
            <div class=" row-p g-4 py-1 row-cols-1 row-cols-lg-1">

                <div class="feature col">


                    <p> accueil@ihi-asso.com</p>




                </div>

            </div>

        </div>

    </article>
</div>