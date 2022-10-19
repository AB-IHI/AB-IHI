
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
    .P1 { color:#000000; font-size:12pt; margin-bottom:0cm; margin-top:0cm; text-align:center ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; }
    .P10 { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr;  margin-right:0cm; }
    .P11 { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; }
    .P12 { color:#000000; font-size:12pt; line-height:100%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; }
    .P3_borderStart { color:#2a6099; font-size:12pt; line-height:100%; margin-top:0cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; font-weight:bold; background-color:#ffffff; padding-bottom:0.247cm;  border-bottom-style:none; }
    .P3 { color:#2a6099; font-size:12pt; line-height:100%; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; font-weight:bold; background-color:#ffffff; padding-bottom:0.247cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
    .P3_borderEnd { color:#2a6099; font-size:12pt; line-height:100%; margin-bottom:0.247cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; font-weight:bold; background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
    .P4_borderStart { color:#2a6099; font-size:12pt; line-height:150%; margin-top:0cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; font-weight:bold; background-color:#ffffff; padding-bottom:0.247cm;  border-bottom-style:none; }
    .P4 { color:#2a6099; font-size:12pt; line-height:150%; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; font-weight:bold; background-color:#ffffff; padding-bottom:0.247cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
    .P4_borderEnd { color:#2a6099; font-size:12pt; line-height:150%; margin-bottom:0.247cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; font-weight:bold; background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
    .P5 { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; }
    .P6_borderStart { color:#000000; font-size:6pt; line-height:150%; margin-top:0cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; background-color:#ffffff; padding-bottom:0.247cm;  border-bottom-style:none; }
    .P6 { color:#000000; font-size:6pt; line-height:150%; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; background-color:#ffffff; padding-bottom:0.247cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
    .P6_borderEnd { color:#000000; font-size:6pt; line-height:150%; margin-bottom:0.247cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
    .P7 { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr;  margin-right:0cm; text-indent:-0.6cm; }
    .P8 { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr;  margin-right:0cm; text-indent:-0.6cm; }
    .P9 { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; text-indent:0cm; }
    .ListLabel_20_1 { font-size:12pt; }
    .ListLabel_20_10 { font-size:12pt; }
    .ListLabel_20_11 { font-size:12pt; }
    .ListLabel_20_12 { font-size:12pt; }
    .ListLabel_20_13 { font-size:12pt; }
    .ListLabel_20_14 { font-size:12pt; }
    .ListLabel_20_15 { font-size:12pt; }
    .ListLabel_20_16 { font-size:12pt; }
    .ListLabel_20_17 { font-size:12pt; }
    .ListLabel_20_18 { font-size:12pt; }
    .ListLabel_20_2 { font-size:12pt; }
    .ListLabel_20_3 { font-size:12pt; }
    .ListLabel_20_4 { font-size:12pt; }
    .ListLabel_20_5 { font-size:12pt; }
    .ListLabel_20_6 { font-size:12pt; }
    .ListLabel_20_7 { font-size:12pt; }
    .ListLabel_20_8 { font-size:12pt; }
    .ListLabel_20_9 { font-size:12pt; }
    .T2 {  font-size:12pt; font-weight:normal; background-color:#ffffff; }
    .T3 {  font-size:12pt; background-color:#ffffff; }
    .T4 {  background-color:#ffffff; }
    .T5 { color:#2a6099;  font-size:12pt; font-weight:bold; background-color:#ffffff; }
    .T6 { color:#2a6099;  font-size:20pt; font-weight:bold; background-color:#ffffff; }
    /* ODF styles with no properties representable as CSS */
    .ListLabel_20_19 .ListLabel_20_20 .ListLabel_20_21 .ListLabel_20_22 .ListLabel_20_23 .ListLabel_20_24 .ListLabel_20_25 .ListLabel_20_26 .ListLabel_20_27 .T1  { }
    
</style>
    <link rel="stylesheet" type="text/css" href="../css_js/expln°style.css" />


</head>

<body class="mb-0">



    <container_main class="container">

    <container class="auto-mx ">

<div id="" class=" d-flex align-items-center justify-content-center">
    <?php 
    include_once "2. Description de la mission.html"; 
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
<script type='text/javascript' src='css_js/js/main.js'></script>

</html>