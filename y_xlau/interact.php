
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
    .P10 { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; margin-left:1.7cm; margin-right:0cm; text-indent:-0.6cm; }
    .P11 { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; margin-left:1.7cm; margin-right:0cm; text-indent:-0.6cm; }
    .P12 { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; margin-left:1.7cm; margin-right:0cm; text-indent:-0.6cm; }
    .P13 { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; margin-left:1.7cm; margin-right:0cm; text-indent:-0.6cm; }
    .P14 { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; margin-left:1.7cm; margin-right:0cm; text-indent:-0.6cm; }
    .P15 { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; margin-left:1.7cm; margin-right:0cm; text-indent:-0.6cm; }
    .P16 { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr;  margin-right:0cm; text-indent:-0.6cm; }
    .P17 { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr;  margin-right:0cm; text-indent:-0.6cm; }
    .P18 { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr;  margin-right:0cm; text-indent:-0.6cm; }
    .P19 { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr;  margin-right:0cm; text-indent:-0.6cm; }
    .P20 { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; }
    .P21 { color:#000000; font-size:12pt; line-height:100%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; }
    .P3_borderStart { color:#000000; font-size:6pt; line-height:150%; margin-top:0cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; font-weight:normal; background-color:#ffffff; padding-bottom:0.247cm;  border-bottom-style:none; }
    .P3 { color:#000000; font-size:6pt; line-height:150%; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; font-weight:normal; background-color:#ffffff; padding-bottom:0.247cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
    .P3_borderEnd { color:#000000; font-size:6pt; line-height:150%; margin-bottom:0.247cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; font-weight:normal; background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
    .P4_borderStart { color:#2a6099; font-size:12pt; line-height:100%; margin-top:0cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; font-weight:bold; background-color:#ffffff; padding-bottom:0.247cm;  border-bottom-style:none; }
    .P4 { color:#2a6099; font-size:12pt; line-height:100%; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; font-weight:bold; background-color:#ffffff; padding-bottom:0.247cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
    .P4_borderEnd { color:#2a6099; font-size:12pt; line-height:100%; margin-bottom:0.247cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; font-weight:bold; background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
    .P5_borderStart { color:#000000; font-size:12pt; line-height:150%; margin-top:0cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; background-color:#ffffff; padding-bottom:0.247cm;  border-bottom-style:none; }
    .P5 { color:#000000; font-size:12pt; line-height:150%; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; background-color:#ffffff; padding-bottom:0.247cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
    .P5_borderEnd { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.247cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
    .P6_borderStart { color:#000000; font-size:12pt; line-height:150%; margin-top:0cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; background-color:#ffffff; padding-bottom:0.247cm;  border-bottom-style:none; }
    .P6 { color:#000000; font-size:12pt; line-height:150%; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; background-color:#ffffff; padding-bottom:0.247cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
    .P6_borderEnd { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.247cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
    .P7 { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; }
    .P8 { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; margin-left:1.7cm; margin-right:0cm; text-indent:-0.6cm; }
    .P9 { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; margin-left:1.7cm; margin-right:0cm; text-indent:-0.6cm; }
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
    .ListLabel_20_19 { font-size:12pt; }
    .ListLabel_20_2 { font-size:12pt; }
    .ListLabel_20_20 { font-size:12pt; }
    .ListLabel_20_21 { font-size:12pt; }
    .ListLabel_20_22 { font-size:12pt; }
    .ListLabel_20_23 { font-size:12pt; }
    .ListLabel_20_24 { font-size:12pt; }
    .ListLabel_20_25 { font-size:12pt; }
    .ListLabel_20_26 { font-size:12pt; }
    .ListLabel_20_27 { font-size:12pt; }
    .ListLabel_20_28 { font-size:12pt; }
    .ListLabel_20_29 { font-size:12pt; }
    .ListLabel_20_3 { font-size:12pt; }
    .ListLabel_20_30 { font-size:12pt; }
    .ListLabel_20_31 { font-size:12pt; }
    .ListLabel_20_32 { font-size:12pt; }
    .ListLabel_20_33 { font-size:12pt; }
    .ListLabel_20_34 { font-size:12pt; }
    .ListLabel_20_35 { font-size:12pt; }
    .ListLabel_20_36 { font-size:12pt; }
    .ListLabel_20_4 { font-size:12pt; }
    .ListLabel_20_46 { font-size:12pt; }
    .ListLabel_20_47 { font-size:12pt; }
    .ListLabel_20_48 { font-size:12pt; }
    .ListLabel_20_49 { font-size:12pt; }
    .ListLabel_20_5 { font-size:12pt; }
    .ListLabel_20_50 { font-size:12pt; }
    .ListLabel_20_51 { font-size:12pt; }
    .ListLabel_20_52 { font-size:12pt; }
    .ListLabel_20_53 { font-size:12pt; }
    .ListLabel_20_54 { font-size:12pt; }
    .ListLabel_20_55 { font-size:12pt; }
    .ListLabel_20_56 { font-size:12pt; }
    .ListLabel_20_57 { font-size:12pt; }
    .ListLabel_20_58 { font-size:12pt; }
    .ListLabel_20_59 { font-size:12pt; }
    .ListLabel_20_6 { font-size:12pt; }
    .ListLabel_20_60 { font-size:12pt; }
    .ListLabel_20_61 { font-size:12pt; }
    .ListLabel_20_62 { font-size:12pt; }
    .ListLabel_20_63 { font-size:12pt; }
    .ListLabel_20_64 { font-size:12pt; }
    .ListLabel_20_65 { font-size:12pt; }
    .ListLabel_20_66 { font-size:12pt; }
    .ListLabel_20_67 { font-size:12pt; }
    .ListLabel_20_68 { font-size:12pt; }
    .ListLabel_20_69 { font-size:12pt; }
    .ListLabel_20_7 { font-size:12pt; }
    .ListLabel_20_70 { font-size:12pt; }
    .ListLabel_20_71 { font-size:12pt; }
    .ListLabel_20_72 { font-size:12pt; }
    .ListLabel_20_8 { font-size:12pt; }
    .ListLabel_20_9 { font-size:12pt; }
    .T2 {  font-size:12pt; font-weight:normal; background-color:#ffffff; }
    .T3 {  font-size:12pt; background-color:#ffffff; }
    .T4 {  background-color:#ffffff; }
    .T5 { color:#2a6099;  font-size:12pt; font-weight:bold; background-color:#ffffff; }
    .T6 { color:#2a6099;  font-size:20pt; font-weight:bold; background-color:#ffffff; }
    .T7 { color:#2a6099;  font-weight:bold; background-color:#ffffff; }
    .T8 { color:#000000;  font-weight:normal; background-color:#ffffff; }
    /* ODF styles with no properties representable as CSS */
    .ListLabel_20_37 .ListLabel_20_38 .ListLabel_20_39 .ListLabel_20_40 .ListLabel_20_41 .ListLabel_20_42 .ListLabel_20_43 .ListLabel_20_44 .ListLabel_20_45 .ListLabel_20_73 .ListLabel_20_74 .ListLabel_20_75 .ListLabel_20_76 .ListLabel_20_77 .ListLabel_20_78 .ListLabel_20_79 .ListLabel_20_80 .ListLabel_20_81 .ListLabel_20_82 .ListLabel_20_83 .ListLabel_20_84 .ListLabel_20_85 .ListLabel_20_86 .ListLabel_20_87 .ListLabel_20_88 .ListLabel_20_89 .ListLabel_20_90 .ListLabel_20_91 .ListLabel_20_92 .ListLabel_20_93 .ListLabel_20_94 .ListLabel_20_95 .ListLabel_20_96 .ListLabel_20_97 .ListLabel_20_98 .ListLabel_20_99 .T1  { }
</style>
    <link rel="stylesheet" type="text/css" href="../css_js/expln°style.css" />


</head>

<body class="mb-0">



    <container_main class="container">

    <container class="auto-mx ">

<div id="" class=" d-flex align-items-center justify-content-center">
    <?php 
    include_once "5. Interaction des participants à la mission.html"; 
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