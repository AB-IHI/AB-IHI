<!-- not in the view because it's a simple text page w links -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>IHI</title>


    <!-- <link rel="stylesheet" type="text/css" href="css_js/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/> -->
    <style type="text/css">
    @page {  }
    table { border-collapse:collapse; border-spacing:0; empty-cells:show }
    td, th { vertical-align:top; font-size:12pt;}
    h1, h2, h3, h4, h5, h6 { clear:both;}
    ol, ul { margin:0; padding:0;}
    li { list-style: none; margin:0; padding:0;}
    /* "li span.odfLiEnd" - IE 7 issue*/
    li span { clear: both; line-height:0; width:0; height:0; margin:0; padding:0; }
    span.footnodeNumber { padding-right:1em; }
    span.annotation_style_by_filter { font-size:95%; font-family:Arial; background-color:#fff000;  margin:0; border:0; padding:0;  }
    span.heading_numbering { margin-right: 0.8rem; }* { margin:0;}
    .P1 { font-size:12pt; margin-bottom:0cm; margin-top:0cm; text-align:center ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; }
    .P10 { font-size:12pt; line-height:115%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; }
    .P11 { font-size:12pt; line-height:100%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; vertical-align:top; writing-mode:horizontal-tb; direction:ltr; }
    .P12_borderStart { font-size:6pt; line-height:100%; margin-top:0cm; text-align:left ! important; font-family:Tahoma; vertical-align:top; writing-mode:horizontal-tb; direction:ltr; color:#000000; font-weight:bold; background-color:#ffffff; padding-bottom:0.247cm;  border-bottom-style:none; }
    .P12 { font-size:6pt; line-height:100%; text-align:left ! important; font-family:Tahoma; vertical-align:top; writing-mode:horizontal-tb; direction:ltr; color:#000000; font-weight:bold; background-color:#ffffff; padding-bottom:0.247cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
    .P12_borderEnd { font-size:6pt; line-height:100%; margin-bottom:0.247cm; text-align:left ! important; font-family:Tahoma; vertical-align:top; writing-mode:horizontal-tb; direction:ltr; color:#000000; font-weight:bold; background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
    .P13_borderStart { font-size:12pt; line-height:150%; margin-top:0.101cm; text-align:left ! important; font-family:Tahoma; vertical-align:top; writing-mode:horizontal-tb; direction:ltr; color:#000000; background-color:#ffffff; padding-bottom:0.146cm;  border-bottom-style:none; }
    .P13 { font-size:12pt; line-height:150%; text-align:left ! important; font-family:Tahoma; vertical-align:top; writing-mode:horizontal-tb; direction:ltr; color:#000000; background-color:#ffffff; padding-bottom:0.146cm; padding-top:0.101cm;  border-top-style:none; border-bottom-style:none; }
    .P13_borderEnd { font-size:12pt; line-height:150%; margin-bottom:0.146cm; text-align:left ! important; font-family:Tahoma; vertical-align:top; writing-mode:horizontal-tb; direction:ltr; color:#000000; background-color:#ffffff; padding-top:0.101cm;  border-top-style:none;}
    .P14_borderStart { font-size:12pt; line-height:150%; margin-top:0.101cm; text-align:left ! important; font-family:Tahoma; vertical-align:top; writing-mode:horizontal-tb; direction:ltr; color:#000000; font-weight:bold; background-color:#ffffff; padding-bottom:0.146cm;  border-bottom-style:none; }
    .P14 { font-size:12pt; line-height:150%; text-align:left ! important; font-family:Tahoma; vertical-align:top; writing-mode:horizontal-tb; direction:ltr; color:#000000; font-weight:bold; background-color:#ffffff; padding-bottom:0.146cm; padding-top:0.101cm;  border-top-style:none; border-bottom-style:none; }
    .P14_borderEnd { font-size:12pt; line-height:150%; margin-bottom:0.146cm; text-align:left ! important; font-family:Tahoma; vertical-align:top; writing-mode:horizontal-tb; direction:ltr; color:#000000; font-weight:bold; background-color:#ffffff; padding-top:0.101cm;  border-top-style:none;}
    .P15_borderStart { font-size:6pt; line-height:150%; margin-top:0.101cm; text-align:left ! important; font-family:Tahoma; vertical-align:top; writing-mode:horizontal-tb; direction:ltr; color:#000000; background-color:#ffffff; padding-bottom:0.146cm;  border-bottom-style:none; }
    .P15 { font-size:6pt; line-height:150%; text-align:left ! important; font-family:Tahoma; vertical-align:top; writing-mode:horizontal-tb; direction:ltr; color:#000000; background-color:#ffffff; padding-bottom:0.146cm; padding-top:0.101cm;  border-top-style:none; border-bottom-style:none; }
    .P15_borderEnd { font-size:6pt; line-height:150%; margin-bottom:0.146cm; text-align:left ! important; font-family:Tahoma; vertical-align:top; writing-mode:horizontal-tb; direction:ltr; color:#000000; background-color:#ffffff; padding-top:0.101cm;  border-top-style:none;}
    .P16 { font-size:12pt; line-height:150%; margin-bottom:0.146cm; margin-top:0.101cm; text-align:left ! important; font-family:Liberation Serif; vertical-align:top; writing-mode:horizontal-tb; direction:ltr; }
    .P17 { font-size:12pt; line-height:150%; margin-bottom:0.146cm; margin-top:0.101cm; text-align:left ! important; font-family:Liberation Serif; vertical-align:top; writing-mode:horizontal-tb; direction:ltr; }
    .P18 {   margin-bottom:0.146cm; margin-top:0.101cm; text-align:left ! important; font-family:Liberation Serif; vertical-align:top; writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; text-indent:0cm; }
    .P19 {  margin-bottom:0.146cm; margin-top:0.101cm; text-align:left ! important; font-family:Liberation Serif; vertical-align:top; writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; text-indent:0cm; }
    .P20 { font-size:12pt; line-height:150%; margin-bottom:0.146cm; margin-top:0.101cm; text-align:left ! important; font-family:Liberation Serif; vertical-align:top; writing-mode:horizontal-tb; direction:ltr; margin-left:2cm; margin-right:0cm; text-indent:-0.7cm; }
    .P21 { font-size:12pt; line-height:150%; margin-bottom:0.146cm; margin-top:0.101cm; text-align:left ! important; font-family:Liberation Serif; vertical-align:top; writing-mode:horizontal-tb; direction:ltr; margin-left:2cm; margin-right:0cm; text-indent:-0.7cm; }
    .P22 { font-size:12pt; line-height:150%; margin-bottom:0.146cm; margin-top:0.101cm; text-align:left ! important; font-family:Liberation Serif; vertical-align:top; writing-mode:horizontal-tb; direction:ltr; margin-left:2cm; margin-right:0cm; text-indent:-0.7cm; }
    .P23 { font-size:12pt; line-height:150%; margin-bottom:0.146cm; margin-top:0.101cm; text-align:left ! important; font-family:Liberation Serif; vertical-align:top; writing-mode:horizontal-tb; direction:ltr; margin-left:2cm; margin-right:0cm; text-indent:-0.7cm; }
    .P24_borderStart { font-size:12pt; line-height:150%; margin-top:0.101cm; text-align:left ! important; font-family:Tahoma; vertical-align:top; writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; text-indent:0cm; color:#000000; background-color:#ffffff; padding-bottom:0.146cm;  border-bottom-style:none; }
    .P24 { font-size:12pt; line-height:150%; text-align:left ! important; font-family:Tahoma; vertical-align:top; writing-mode:horizontal-tb; direction:ltr; margin-left:2cm; margin-right:0cm; text-indent:-0.7cm; color:#000000; background-color:#ffffff; padding-bottom:0.146cm; padding-top:0.101cm;  border-top-style:none; border-bottom-style:none; }
    .P24_borderEnd { font-size:12pt; line-height:150%; margin-bottom:0.146cm; text-align:left ! important; font-family:Tahoma; vertical-align:top; writing-mode:horizontal-tb; direction:ltr; margin-left:2cm; margin-right:0cm; text-indent:-0.7cm; color:#000000; background-color:#ffffff; padding-top:0.101cm;  border-top-style:none;}
    .P25 { font-size:12pt; line-height:150%; margin-bottom:0.146cm; margin-top:0.101cm; text-align:left ! important; font-family:Liberation Serif; vertical-align:top; writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; text-indent:0cm; }
    .P3 { font-size:18pt; font-weight:bold; margin-bottom:0.212cm; margin-top:0.423cm; text-align:left ! important; font-family:Liberation Sans; writing-mode:horizontal-tb; direction:ltr; line-height:150%; margin-bottom: 80px;}
    .P4 { font-size:18pt; font-weight:bold; margin-bottom:0.212cm; margin-top:0.423cm; text-align:left ! important; font-family:Liberation Sans; writing-mode:horizontal-tb; direction:ltr; }
    .P5 { font-size:18pt; font-weight:bold; margin-bottom:0.212cm; margin-top:0.423cm; text-align:left ! important; font-family:Liberation Sans; writing-mode:horizontal-tb; direction:ltr; }
    .P6 { font-size:18pt; font-weight:bold; margin-bottom:0.212cm; margin-top:0.423cm; text-align:left ! important; font-family:Liberation Sans; writing-mode:horizontal-tb; direction:ltr; line-height:150%; }
    .P7 { font-size:18pt; font-weight:bold; margin-bottom:0.146cm; margin-top:0.101cm; text-align:left ! important; font-family:Liberation Sans; writing-mode:horizontal-tb; direction:ltr; line-height:150%; }
    .P8_borderStart { font-size:12pt; font-weight:bold; margin-top:0.101cm; text-align:left ! important; font-family:Tahoma; writing-mode:horizontal-tb; direction:ltr; line-height:150%; color:#000000; background-color:#ffffff; padding-bottom:0.146cm;  border-bottom-style:none; }
    .P8 { font-size:12pt; font-weight:bold; text-align:left ! important; font-family:Tahoma; writing-mode:horizontal-tb; direction:ltr; line-height:150%; color:#000000; background-color:#ffffff; padding-bottom:0.146cm; padding-top:0.101cm;  border-top-style:none; border-bottom-style:none; }
    .P8_borderEnd { font-size:12pt; font-weight:bold; margin-bottom:0.146cm; text-align:left ! important; font-family:Tahoma; writing-mode:horizontal-tb; direction:ltr; line-height:150%; color:#000000; background-color:#ffffff; padding-top:0.101cm;  border-top-style:none;}
    .P9 { font-size:12pt; margin-bottom:0.146cm; margin-top:0.101cm; text-align:left ! important; font-family:Liberation Serif; vertical-align:top; writing-mode:horizontal-tb; direction:ltr; line-height:150%; }
    .Internet_20_link { color:#000080; text-decoration:underline; }
    .T1 { color:#00a933; font-family:Tahoma; font-size:12pt; text-decoration:none ! important; font-weight:bold; }
    .T10 { color:#000000; font-family:Tahoma; font-size:10pt; letter-spacing:normal; font-style:normal; font-weight:normal; background-color:#ffffff; }
    .T2 { color:#00a933; font-family:Tahoma; font-size:59px; text-decoration:none ! important; font-weight:bold; background-color:#ffffff; }
    .T4 { color:#2a6099; font-family:Tahoma; font-size:26pt; }
    .T5 { color:#2a6099; font-family:Tahoma; font-size:20pt; font-weight:bold; background-color:#ffffff; }
    .T6 { color:#000000; font-family:Tahoma; font-size:12pt; background-color:#ffffff; }
    .T7 { color:#000000; font-family:Tahoma; font-size:10pt; font-weight:bold; background-color:#ffffff; }
    .T8 { color:#000000; font-family:Tahoma; font-size:10pt; background-color:#ffffff; }
    .T9 { font-family:Tahoma; font-size:10pt; }
    /* ODF styles with no properties representable as CSS */
    .ListLabel_20_1 .ListLabel_20_10 .ListLabel_20_11 .ListLabel_20_12 .ListLabel_20_13 .ListLabel_20_14 .ListLabel_20_15 .ListLabel_20_16 .ListLabel_20_17 .ListLabel_20_18 .ListLabel_20_19 .ListLabel_20_2 .ListLabel_20_20 .ListLabel_20_21 .ListLabel_20_22 .ListLabel_20_23 .ListLabel_20_24 .ListLabel_20_25 .ListLabel_20_26 .ListLabel_20_27 .ListLabel_20_28 .ListLabel_20_29 .ListLabel_20_3 .ListLabel_20_30 .ListLabel_20_31 .ListLabel_20_32 .ListLabel_20_33 .ListLabel_20_34 .ListLabel_20_35 .ListLabel_20_36 .ListLabel_20_4 .ListLabel_20_5 .ListLabel_20_6 .ListLabel_20_7 .ListLabel_20_8 .ListLabel_20_9  { }
    </style>
        <link rel="stylesheet" type="text/css" href="css_js/expln°style.css" />


</head>

<body class="mb-0">



    <container_main class="container">

    <container class="auto-mx don">

<div id="" class=" d-flex align-items-center justify-content-center">
    <?php include_once "Règlement bref sur les  bénévole.html"; ?>
</div>

</container>

<container class="auto-mx hid_btn_xl">
<!-- 
<article class="article">
    <div class="container px-4 py-5">
        <div id="featured" class="d-flex align-items-center justify-content-center">
            <a id="a_​_Voir_" href="y_storage/Règlement sur les bénévoles.pdf"><div class="T2 Tcustom">Voir+</div></a>
            <h1 class="T4U Tcustom pb-2 border-bottom ">Devenir bénévole </h1>
        
        <div class="">
            <div class="wrapper ">
                <p>
                    Toute personne peut participer aux activités de l'Association en tant que bénévole si elle partage les idées d'humanisme et est prête à appliquer ses efforts, ses connaissances et son expérience pour assurer la mise en œuvre réussie de programmes humanitaires et de projets caritatifs de l'Association, et si elle reconnaît et suit également les règles énoncées dans le présent Règlement.
            
                    Pour rejoindre les rangs des bénévoles, il est nécessaire d'enregistrer la candidature correspondante sur le site internet de l'Association. A l'issue de son inscription, le candidat reçoit une invitation à un entretien et l'accès aux informations sur les missions humanitaires de l'Association en tant que volontaire. A l'issue de la période d'essai, le candidat reçoit le statut de bénévole de l'Association.
            
                    La présence de bénévoles impose à l'Association des responsabilités et des obligations tant envers les bénévoles eux-mêmes que pour les actions de chaque bénévole. Afin de réduire les divers risques et d'indemniser les dommages éventuels, l'Association interagit avec les institutions d'assurance, les autorités publiques et indépendantes de la régulation.
            
                    L'Association tient des registres des bénévoles, organise et crée des conditions sûres et confortables pour leur permettre de participer à des missions humanitaires.
                </p>
            </div>
        </div>
    </div>
</article>

     
     
     

<article class="article">
    <div class="container px-4 py-5" id="featured-1">
        <div class="d-flex align-items-center justify-content-center">
            <h1 class="T4 pb-2 border-bottom h2">Catégories spéciales de bénévoles</h1>
            
            <div class="row-p g-4 py-1 row-cols-1 row-cols-lg-1">
                <div class="wrapper feature col">
                    <p>
                        Un chômeur peut se porter bénévole pour l’Association sans affecter son droit à percevoir des allocations de chômage. Dans ce cas, certaines conditions doivent être respectées :
                
                            il n'a pas travaillé auparavant comme employé de l'Association ;
                
                            ses activités bénévoles :
                
                            ne doivent pas interférer avec sa recherche active d'emploi,
                
                            ne doivent pas remplacer le travail rémunéré.
                
                        Attirer les employés vers des activités bénévoles est facilité par certains mécanismes organisés de l'entreprise dans laquelle ils travaillent. Ils peuvent également participer au mouvement bénévole avec l'entreprise de deux manières :
                
                            bénévolat de compétences : l'employeur facilite les échanges entre ses salariés et l'Association, les salariés qui le souhaitent font du bénévolat de leur temps personnel, et l'Association facilite l'accès de ces bénévoles à des missions de volontariat spécifiques compatibles avec les journées de travail ;
                
                            mécénat de compétences : l'employeur invite ses salariés à consacrer quelques heures de leur temps de travail à un projet commun avec l'Association ; l'entreprise peut bénéficier d'une réduction d'impôt en fonction du salaire d'un bénévole durant sa mission au sein de l'Association.
                
                        Sous certaines conditions, les salariés peuvent bénéficier d'un congé afin d'investir leur temps personnel dans une vie associative (voir chapitre 10. Les congés de bénévolat).
                
                        Une personne en âge de préretraite peut facilement devenir bénévole dans une association, à la seule condition que ce bénévolat ne se fasse pas dans la structure dans laquelle elle était auparavant salarié.
                
                        <div class="bold"><p>Références juridiques :</p></div>
                
                        <p>
                            Des chômeurs : <a href="https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000006903908">code du travail, article L 5425-8</a>
                            <p>
                                Des préretraités : <a href="https://www.legifrance.gouv.fr/codes/section_lc/LEGITEXT000006072050/LEGISCTA000018494360?init=true&page=1&query=Article+R5123-18+-+Code+du+travail&searchField=ALL&tab_selection=all&anchor=LEGIARTI000018526998#LEGIARTI000018526998">
                                    code du travail, art. R. 5123-18</a>
                            </p>
                        </p>
                
                        <div class="bold">
                            <p>En savoir + :</p>
                        </div>
                
                        
                    </p>
                    <p>
                        -<a href="https://www.associations.gouv.fr/cumul-des-statuts-etre-benevole-et-en-preretraite.html
                                        ">Être bénévole et en préretraite </a>
                            <pre>
<p>-</p><a href="https://www.associations.gouv.fr/je-suis-actif.html">actifs</a>
<p>-</p><a href="https://www.associations.gouv.fr/je-suis-senior.html">préretraités</a>
                            </pre>
                    </p>
                </div>
            </div>
        </div>
    </div>
</article>

    
    
   <article class="article">
       <div class="container px-4 py-5">
           <div class="d-flex align-items-center justify-content-center">
               <a id="a_​_Voir_" href="/y_storage/Règlement sur les bénévoles.pdf"><div class="T2">Voir+</div></a>
               <h1 id="featured-2" class="T4">Droits du bénévole</h1>
               <div class="row-p g-4 py-1 row-cols-1 row-cols-lg-1">
                   <div class="wrapper">
                    <p>
                   
                        Le bénévole a le droit :
                   
                            de choisir en toute autonomie la mission humanitaire au sein de laquelle il souhaite exercer ses activités ;
                            sans aucune démarche ni indemnité, de résilier ou suspendre sa participation à une mission humanitaire, ainsi que son statut en tant que bénévole de l'Association ;
                            prendre en toute indépendance des décisions dans le cadre de l'exécution d'une mission humanitaire dans le cadre des conditions et restrictions prévues par le présent Règlement, les recommandations contenues dans la description de chaque programme humanitaire spécifique ou projet caritatif, ainsi que les instructions des responsables des groupes de bénévoles ou du directeur d’Office ;
                            aux conditions sûres et confortables pour mener à bien ses activités dans le cadre des missions humanitaires de l'Association ;
                            de contrôler les activités des organes de gestion de l'Association en comparant les données accessibles au public avec l'état actuel des choses, ainsi qu'en utilisant d'autres méthodes légitimes de vérification ;
                            de formuler des suggestions et des commentaires aux responsables des groupes de bénévoles, à la direction de l’Office et de l'Association, visant à améliorer l'efficacité des missions humanitaires, les activités des bénévoles qui y participent, la direction des Offices et de l'Association ;
                            de former une culture des relations afin d'améliorer l'interaction et la compréhension mutuelle dans l'équipe à tous les niveaux structurels de l'Association en initiant des procédures et des technologies appropriées.
                    </p>
                   </div>
               </div>
           </div>
       </div>
   </article>

 

     
   <article class="article">
       <div class="container px-4 py-5">
           <div class="d-flex align-items-center justify-content-center">
    <a id="a_​_Voir_" href="/y_storage/Règlement sur les bénévoles.pdf"><div class="T2">Voir+</div></a> 
    <h1 id="featured-3" class="T4">Devoirs du bénévole</h1>
<div class="wrapper">
    <p>
        
        Le bénévole n'est soumis à aucun lien de subordination juridique.
        
        Cependant, la participation de chaque bénévole aux activités de l'Association implique l'accomplissement bénévole d'un certain ensemble de devoirs, parmi lesquels l'interaction avec d'autres bénévoles, la capacité de trouver son rôle dans l'équipe, et de faire preuve de bienveillance et de courtoisie envers toutes les personnes qui l'entourent.
        
        L'Association attend de chaque bénévole impliqué dans la mise en œuvre d’une mission humanitaire :
        
            à la fois la motivation et l'initiative dans la mise en œuvre des missions humanitaires, ainsi qu'une auto-organisation et une rigueur maximales en matière d'assistance aux bénéficiaires, car la santé et, dans certains cas, la vie des personnes dépendent de la décision et de l'assistance opportune ;
            la prudence et le soin dans leurs actions, puisqu'il s'agit de la confiance des mécènes et sponsors qui ont confié à l'Association le transfert de valeurs matérielles, l'apport d'un soutien ou d'un service aux personnes qui en ont besoin ;
            la capacité de prévoir et d'éviter divers types de risques tant pour soi personnellement que pour tous les participants aux missions humanitaires, en suivant les instructions du présent Règlement, les recommandations contenues dans la description de chaque programme humanitaire ou projet caritatif spécifique, ainsi que les instructions des responsables de groupes de bénévoles ou du directeur d’Office ;
            être extrêmement objectif dans l'évaluation de la situation de vie des personnes, de leurs besoins et de leurs problèmes.
        
        L'incompatibilité des qualités personnelles d'un bénévole avec les conditions énumérées ci-dessus ou son refus de répondre aux exigences du rôle qui lui est confié dans la mission humanitaire rend impossible de continuer à y participer, et dans certains cas remet en cause  sa poursuite du séjour dans le statut de bénévole de l'Association.
        
        Il est important de comprendre qu'en cas de déviation aux exigences de la mission humanitaire, le bénévole est personnellement responsable des éventuelles conséquences négatives.
    </p>
</div>

    <a id="a_​_Voir_" href="y_storage/Règlement sur les bénévoles.pdf"><div class="T2">Voir+</div></a> 
    </p>

</div>
       </div>
   </article> -->

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
<script type='text/javascript' src='css_js/main.js'></script>

</html>