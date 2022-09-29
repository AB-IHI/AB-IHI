<!-- not in the view because it's a simple text page w links -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>IHI</title>

    <!-- <link rel="stylesheet" type="text/css" href="css_js/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css_js/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/> -->
    <style type="text/css">
 @page {  }
    table { border-collapse:collapse; border-spacing:0; empty-cells:show }
    td, th { vertical-align:top; font-size:12pt;}
    h1, h2, h3, h4, h5, h6 { clear:both;}
    ol, ul { margin:0; padding:0;}
    li { list-style: none; margin:0; padding:0;}
    /* "li span.odfLiEnd" - IE 7 issue*/
    li span. { clear: both; line-height:0; width:0; height:0; margin:0; padding:0; }
    span.footnodeNumber { padding-right:1em; }
    span.annotation_style_by_filter { font-size:95%; font-family:Arial; background-color:#fff000;  margin:0; border:0; padding:0;  }
    span.heading_numbering { margin-right: 0.8rem; }* { margin:0;}
    .P1 { font-size:18pt; font-weight:bold; margin-bottom:0.212cm; margin-top:0.423cm; text-align:left ! important; font-family:Liberation Sans; writing-mode:horizontal-tb; direction:ltr; line-height:150%; }
    .P10_borderStart { font-size:12pt; line-height:150%; margin-top:0cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; background-color:#ffffff; padding-bottom:0.247cm;  border-bottom-style:none; }
    .P10 { font-size:12pt; line-height:150%; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; background-color:#ffffff; padding-bottom:0.247cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
    .P10_borderEnd { font-size:12pt; line-height:150%; margin-bottom:0.247cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
    .P11_borderStart { font-size:11pt; line-height:150%; margin-top:0cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; color:#000000; font-weight:bold; background-color:#ffffff; padding-bottom:0.247cm;  border-bottom-style:none; }
    .P11 { font-size:11pt; line-height:150%; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; color:#000000; font-weight:bold; background-color:#ffffff; padding-bottom:0.247cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
    .P11_borderEnd { font-size:11pt; line-height:150%; margin-bottom:0.247cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; color:#000000; font-weight:bold; background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
    .P12 { font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0.499cm; text-indent:0cm; }
    .P13 { font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr;  margin-right:0cm; text-indent:-0.6cm; }
    .P14 { font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr;  margin-right:0cm; text-indent:-0.6cm; }
    .P15 { font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr;  margin-right:0cm; text-indent:-0.6cm; }
    .P16 { font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr;  margin-right:0cm; text-indent:-0.6cm; }
    .P17 { font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr;  margin-right:0cm; text-indent:-0.6cm; }
    .P18 { font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; margin-left:2.701cm; margin-right:0cm; text-indent:-0.6cm; }
    .P19 { font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; margin-left:2.701cm; margin-right:0cm; text-indent:-0.6cm; }
    .P2 { font-size:18pt; font-weight:bold; margin-bottom:0.212cm; margin-top:0.423cm; text-align:left ! important; font-family:Liberation Sans; writing-mode:horizontal-tb; direction:ltr; line-height:150%; }
    .P20 { font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; margin-left:2.701cm; margin-right:0cm; text-indent:-0.6cm; }
    .P21 { font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:justify ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; text-indent:0cm; }
    .P22 { font-size:12pt; line-height:150%; margin-bottom:0.499cm; margin-top:0cm; text-align:justify ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; text-indent:0cm; }
    .P23_borderStart { font-size:12pt; line-height:150%; margin-top:0cm; text-align:justify ! important;  writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; text-indent:0cm; color:#000000; letter-spacing:normal; font-style:normal; font-weight:normal; background-color:#ffffff; padding-bottom:0.499cm;  border-bottom-style:none; }
    .P23 { font-size:12pt; line-height:150%; text-align:justify ! important;  writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; text-indent:0cm; color:#000000; letter-spacing:normal; font-style:normal; font-weight:normal; background-color:#ffffff; padding-bottom:0.499cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
    .P23_borderEnd { font-size:12pt; line-height:150%; margin-bottom:0.499cm; text-align:justify ! important;  writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; text-indent:0cm; color:#000000; letter-spacing:normal; font-style:normal; font-weight:normal; background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
    .P24 { font-size:12pt; line-height:150%; margin-bottom:0cm; margin-top:0cm; text-align:justify ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; text-indent:0cm; }
    .P25 { font-size:12pt; line-height:150%; margin-bottom:0cm; margin-top:0cm; text-align:justify ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; text-indent:0cm; }
    .P3_borderStart { font-size:6pt; margin-top:0cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; line-height:150%; background-color:#ffffff; padding-bottom:0.499cm;  border-bottom-style:none; }
    .P3 { font-size:6pt; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; line-height:150%; background-color:#ffffff; padding-bottom:0.499cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
    .P3_borderEnd { font-size:6pt; margin-bottom:0.499cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; line-height:150%; background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
    .P4 { font-size:12pt; line-height:150%; margin-bottom:0.499cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; }
    .P5 { font-size:26pt; line-height:115%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; color:#2a6099; }
    .P6 { font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; writing-mode:horizontal-tb; direction:ltr; }
    .P7 { font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; writing-mode:horizontal-tb; direction:ltr; }
    .P8_borderStart { font-size:12pt; line-height:150%; margin-top:0cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; background-color:#ffffff; padding-bottom:0.247cm;  border-bottom-style:none; }
    .P8 { font-size:12pt; line-height:150%; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; background-color:#ffffff; padding-bottom:0.247cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
    .P8_borderEnd { font-size:12pt; line-height:150%; margin-bottom:0.247cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
    .P9_borderStart { font-size:11pt; line-height:150%; margin-top:0cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; background-color:#ffffff; padding-bottom:0.247cm;  border-bottom-style:none; }
    .P9 { font-size:11pt; line-height:150%; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; background-color:#ffffff; padding-bottom:0.247cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
    .P9_borderEnd { font-size:11pt; line-height:150%; margin-bottom:0.247cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
    .Internet_20_link { color:#000080; text-decoration:underline; }
    .T1 { color:#00a933;  font-size:14pt; font-weight:bold; }
    .T10 {  font-size:10pt; font-weight:bold; background-color:#ffffff; }
    .T11 {  font-size:10pt; background-color:#ffffff; }
    .T12 { color:#000000;  font-size:12pt; letter-spacing:normal; font-style:normal; font-weight:normal; background-color:#ffffff; }
    .T13 { color:#000000;  font-size:12pt; letter-spacing:normal; font-style:normal; font-weight:normal; background-color:#ffffff; }
    .T14 { color:#000000;  font-size:12pt; letter-spacing:normal; font-style:normal; font-weight:normal; }
    .T15 { color:#2a6099;  font-size:14pt; letter-spacing:normal; font-style:normal; font-weight:bold; background-color:#ffffff; }
    .T16 { color:#2a6099;  font-size:14pt; letter-spacing:normal; font-style:normal; text-decoration:underline; font-weight:bold; background-color:transparent; }
    .T17 { color:#07507e;  font-size:12pt; letter-spacing:normal; font-style:normal; text-decoration:underline; font-weight:normal; background-color:#ffffff; }
    .T18 { color:#06436a;  font-size:12pt; letter-spacing:normal; font-style:normal; text-decoration:underline; font-weight:normal; background-color:transparent; }
    .T19 { color:#06436a;  font-size:12pt; letter-spacing:normal; font-style:normal; text-decoration:underline; font-weight:normal; background-color:transparent; }
    .T2 { color:#2a6099;  font-size:26pt; font-weight:bold; background-color:#ffffff; }
    .T20 { color:#333333; font-family:Open Sans, arial, helvetica, sans-serif; font-size:10.5pt; letter-spacing:normal; font-style:normal; font-weight:normal; background-color:#ffffff; }
    .T22 { color:#000000; font-size:10pt; font-style:normal; font-weight:bold; background-color:#ffffff; }
    .T23 { color:#000000; font-size:10pt; font-style:normal; font-weight:normal; background-color:#ffffff; }
    .T24 { color:#000000; font-size:10pt; font-style:italic; font-weight:bold; background-color:#ffffff; }
    .T3 { color:#2a6099; font-size:12pt; font-weight:bold; background-color:#ffffff; }
    .T4 { color:#2a6099; font-size:14pt; font-weight:bold; background-color:#ffffff; }
    .T7 {  background-color:#ffffff; }
    .T8 {  font-size:12pt; background-color:#ffffff; }
    .T9 {  font-size:12pt; background-color:#ffffff; }
    /* ODF styles with no properties representable as CSS */
    .ListLabel_20_1 .ListLabel_20_10 .ListLabel_20_11 .ListLabel_20_12 .ListLabel_20_13 .ListLabel_20_14 .ListLabel_20_15 .ListLabel_20_16 .ListLabel_20_17 .ListLabel_20_18 .ListLabel_20_19 .ListLabel_20_2 .ListLabel_20_20 .ListLabel_20_21 .ListLabel_20_22 .ListLabel_20_23 .ListLabel_20_24 .ListLabel_20_25 .ListLabel_20_26 .ListLabel_20_27 .ListLabel_20_28 .ListLabel_20_29 .ListLabel_20_3 .ListLabel_20_30 .ListLabel_20_31 .ListLabel_20_32 .ListLabel_20_33 .ListLabel_20_34 .ListLabel_20_35 .ListLabel_20_36 .ListLabel_20_4 .ListLabel_20_5 .ListLabel_20_6 .ListLabel_20_7 .ListLabel_20_8 .ListLabel_20_9  { }
     </style>
    <link rel="stylesheet" type="text/css" href="css_js/expln°style.css" />


</head>

<body class="mb-0">



    <container_main class="container">

    <container class="auto-mx ">

<div id="" class=" d-flex align-items-center justify-content-center">
    <?php 
    include_once "3. Activités de bienfaisance et humanitaires internationales.html"; 
    ?>
</div>

</container>

<container class="auto-mx hid_btn_xl">
<!-- 
<article class="article">
    <div class="container px-4 py-5">
        <div id="featured" class="d-flex align-items-center justify-content-center">
            <a id="a_​_Voir_" href="y_storage/Règlement sur les bénévoles.pdf"><div class="T2 Tcustom">Lien vers le texte intégral</div></a>
            <h1 class="T4 Tcustom pb-2 border-bottom ">​ Dons faits au profit d'organismes étrangers   </h1>
        
        <div class="">
            <div class="wrapper ">
                <p>
                
    

Le régime du mécénat est ouvert aux dons faits au profit d'organismes étrangers dont le siège social est situé dans l'espace européen, c'est-à-dire dans un État membre de l'Union Européenne (UE) ou de l'Espace Économique Européen (EÉE).

Lors que des organismes étrangers ont leur siège social dans un État membre de l'UE ou dans un autre État partie à l'accord sur l'EÉE ayant conclu avec la France une convention d'assistance administrative en vue de lutter contre la fraude et l'évasion fiscale, les dons qui leur sont effectués ouvrent droit à réduction d'impôt sous réserve de poursuivre des objectifs et de présenter des caractéristiques similaires, tant par leur forme que par leur objet, à ceux des organismes éligibles dont le siège est situé en France. Ils doivent exercer une activité éligible au mécénat en France ou dans l'espace européen.

Sont également visées la région ultra périphérique (RUP) de l'UE, qui font partie intégrante de l'Union. Au contraire, en sont exclus les pays et territoires d'Outre-mer (PTOM), qui ne font pas partie de l'UE ni de l'EEE, sauf les organismes sis dans les collectivités d'outre-mer (soit Saint-Barthélemy, Saint-Martin, la Polynésie française, Wallis-et-Futuna, Saint-Pierre-et-Miquelon et la Nouvelle Calédonie) qui, dans ce cadre, sont assimilés à des organismes français.

Les organismes européens peuvent solliciter un agrément attestant qu'ils poursuivent des objectifs et présentent des caractéristiques similaires aux organismes éligibles dont le siège est situé en France. Cet agrément est délivré par la Direction générale des finances publiques.

Il existe trois exceptions cependant.

    Pour les organismes dont le siège est situé hors des frontières de l'UE ou de l'EEE.
    La doctrine fiscale admet que les organisations internationales faisant appel à la générosité du public dont la France fait partie (institutions spécialisées et fonds et programmes de l'ONU tels que l'Unesco, l'Unicef, le Programme alimentaire mondial) ouvrent droit à la réduction d'impôt quel que soit le lieu de leur siège social, même s'il ne se situe pas dans l'espace européen et ce, sans avoir à solliciter d'agrément préalable, dès lors que la France participe à l'élaboration de leurs programmes d'action et à leur gouvernance. 

    Pour les les organismes dont le siège est situé hors l'espace européen et disposant d'un établissement français déclaré.
    L'administration fiscale admet que les organismes à but non lucratif étrangers disposant d'un établissement français déclaré répondant aux conditions posées par les articles 200 et 238 bis du code général des impôts, puissent bénéficier du régime fiscal du mécénat sous réserve que les dons qui lui sont alloués soient strictement affectés à son établissement français, lequel doit faire l'objet d'une comptabilité distincte. 

    Pour certaines actions menées hors les frontières européennes.
    La doctrine fiscale admet également, sous conditions, que les actions réalisées hors des frontières européennes ouvrent droit au mécénat les actions réalisées hors des frontières européennes dès lors qu'il s'agit d'actions humanitaires, d'actions concourant à la mise en valeur du patrimoine artistique, à la diffusion de la culture, de la langue et des connaissances scientifiques françaises, d'actions en faveur de la protection de l'environnement naturel ou d'actions scientifiques ainsi que les dons versés à certaines organisations internationales. De plus, une activité non listée exercée en dehors de l'espace européen sera néanmoins éligible au mécénat si elle constitue l'accessoire indispensable d'actions menées en France ou dans l'espace européen. 

Sous réserve que ces actions ne soient pas pilotées par des sociétés commerciales ou des structures à but lucratif, le concept élargi d'action humanitaire inclut les actions d'urgence énumérés ci-dessous.

    1.1. Les actions d'urgence afin de faire face à des catastrophes présentant un caractère imprévisible et ponctuel, et ce, quelle qu'en soit la cause : 

    1) de catastrophes naturelles (telles que sécheresse, inondations, séismes, raz-de-marée, tempêtes, éruptions volcaniques, etc.),

    2) de catastrophes technologiques occasionnant de graves conséquences pour les populations (telles que des explosions dans le cadre d'un établissement industriel, dysfonctionnement d'une centrale nucléaire, etc.),

    3) de faits de guerre,

    4) de famines,

    5) etc.

    2.2. Les actions requises en vue de la satisfaction des besoins indispensables des populations en situation de détresse ou de misère et en vue de contribuer à leur insertion sociale ont pour objet principal : 

    1) 1) de répondre aux besoins sanitaires des populations en détresse :  

    lutte contre la mortalité infantile,  

    fourniture de soins élémentaires, 

    recherche scientifique et programmes d'action développés en vue del utter contre les pandémies et les maladies,  

    l’accès à l'eau ; 

    2) 2) de fournir aux populations concernées des aides permettant d'améliorer les conditions de leur hébergement ;  

    3) 3) de donner aux populations les éléments fondamentaux d'éducation indispensables à leur insertion sociale :  

    actions en faveur de la protection et du développement de l'enfant,  

    alphabétisation, 

    scolarisation, 

    ainsi que les actions en faveur des personnes en situation de handicap ;  

    3. les actions qui contribuent à la protection des droits de minorités, par la mise en œuvre des garanties prévues par les conventions internationales poursuivant un but humanitaire, notamment :  

    1) la convention de Genève du 28 juillet 1951 relative au statut des réfugiés, 

    2) la convention internationale relative aux droits de l'enfant signée à New-York le 26 janvier 1990 publiée au décret n° 90-917 du 8 octobre 1990 portant publication, 

    3) la convention européenne de sauvegarde des droits de l'homme et des libertés fondamentales, 

    4) les actions qui ont pour objet de promouvoir les droits des femmes. 

    4. Les actions de développement permettant l'amorçage d'une activité autonome locale de nature à enclencher une amélioration de la situation des populations : 

    1) dépenses de formation professionnelle, 

    2) mise en place d'une formation universitaire locale, 

    3) fourniture de bétail, 

    4) d'outils ou aides à leur acquisition, 

    5) etc. 

Pour être éligible à participer aux actions humanitaires internationales l’Association doit satisfaire aux 2 conditions cumulatives suivantes :

    1)elle doit  financer directement les actions prises; 

    2)elle doit être en mesure de justifier des dépenses qu'elle a exposées pour remplir leur mission. 

Dans l'hypothèse où l'Association a recours à la coopération d'organismes étrangers présents sur place pour réaliser le programme qu'elle a défini et qu'elle maîtrise, elle doit être en mesure de justifier auprès de l'administration de l'affectation et de l'utilisation des sommes transférées sur les comptes des structures locales partenaires conformément au programme qu'elle a préétabli et qu'elle entend développer. Ainsi, l'Association doit pouvoir produire, sur demande de l'administration, les conventions écrites ou tout document en tenant lieu, permettant de justifier du respect de ces obligations et faisant état notamment :

    des objectifs à atteindre par la structure locale partenaire grâce aux fonds transférés ; 

    des modalités de mise en œuvre et de contrôle des actions qu'elle a définie ; 

    des règles de reddition de comptes et de justification des dépenses réalisées (communication des livres comptables, du compte de résultat relatif au programme bénéficiant du transfert des fonds, etc.) ; 

    de l'acceptation par la structure locale partenaire des contrôles diligentés à l'initiative de l'organisme français ou européen. 

La loi ESS (la loi l'Économie sociale et solidaire du 31 juillet 2014) offre la possibilité à l’Association de recevoir des donations et des legs dans les conditions de l'article 910 du Code civil et de « posséder et administrer tous immeubles acquis à titre gratuit ».
Ces possibilités s'appliquent à l'Association dès réception d'une réponse favorable à une demande formulée auprès du représentant de l’État du département du lieu du siège social de l'Association.
Le bénéfice de l'exonération de droits de mutation à titre gratuit prévue par l'article 795, 4o du CGI est étendu pour les dons et legs a l’Association (article 158 de la loi 2020-1721 du 29-12-2020).

Références juridiques :
Chapitre 4. Lieu du siège de l'organisme et lieu d'exercice de l'activité. BOI-BIC-RICI-20-30-10-10 du 08/06/2022 :
https://bofip.impots.gouv.fr/bofip/10963-PGP.html/identifiant=BOI-BIC-RICI-20-30-10-10-20210217#Lieu_du_siege_de_lorganisme_33
Bénéfices industriels et commerciaux - Réductions et crédits d'impôt - Situation des établissements déclarés d'organismes sans but lucratif dont le siège social se situe en dehors de l'espace européen au regard du régime fiscal du mécénat. BOI-SJ-AGR-60-10 du 10/05/2017 :
https://bofip.impots.gouv.fr/bofip/12806-PGP.html/id entifiant%3DBOI-RES-BIC-000070-20210217
Dons et versements effectués au profit d'organismes agréés dont le siège est situé dans État membre de l'Union européenne ou dans un État partie à l'Espace économique européen :
https://bofip.impots.gouv.fr/bofip/337-PGP.html/identifiant%3DBOI-SJ-AGR-60-10-20150624#III._Dons_et_versements_eff_12
Article 200 GGI :
https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000045764695
Article 238 bis du CGI :
https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000041470858
Arrêté du 26 juin 2008 relatif à la justification des dons :
https://www.legifrance.gouv.fr/jorf/id/JORFTEXT000019079285
Reçu au titre des dons (échantillon) :
https://www.legifrance.gouv.fr/download/pdf?id=oM1qUoVouLaOIMQ2lnr7c2f_IcyGWh5lBHXXm5k4shQ=

En savoir + :
Régime fiscal du mécénat :
https://www.associatheque.fr/fr/fiscalite-des-associations/regime-fiscal-du-mecenat.html
Les associations de bienfaisance et d’assistance :
https://www.prefectures-regions.gouv.fr/ile-de-france/Region-et-institutions/Demarches-administratives/Associations-Fondations/Creation-et-droits/Les-associations-de-bienfaisance-et-d-assistance

    Voir + 


    ​ old 

                </p>
            </div>
        </div>
    </div>
</article> -->

     
     
     <!-- end -->



</container>

</div>



<!-- footer -->
<span class="spacer">
</span>
<container id="footer_" class="container sticky-bottom my-auto">
    <footer class="pt-4 mt-4 footer mt-auto sticky-bottom">



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