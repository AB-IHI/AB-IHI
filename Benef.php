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
    .P1 { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.499cm; margin-top:0cm; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr;}
    .P10_borderStart { color:#000000; font-size:12pt; line-height:150%; margin-top:0cm;  writing-mode:horizontal-tb; direction:ltr;margin-left:1.7cm; margin-right:0cm; text-indent:-0.7cm; background-color:#ffffff; padding-bottom:0.499cm;  border-bottom-style:none; }
    .P10 { color:#000000; font-size:12pt; line-height:150%;  writing-mode:horizontal-tb; direction:ltr; margin-right:0cm; text-indent:-0.7cm; background-color:#ffffff; padding-bottom:0.499cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
    .P10_borderEnd { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.499cm;  writing-mode:horizontal-tb; direction:ltr;margin-left:1.7cm; margin-right:0cm; text-indent:-0.7cm; background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
    .P11_borderStart { color:#000000; font-size:12pt; line-height:150%; margin-top:0cm;  writing-mode:horizontal-tb; direction:ltr;margin-left:1.7cm; margin-right:0cm; text-indent:-0.7cm; background-color:#ffffff; padding-bottom:0.499cm;  border-bottom-style:none; }
    .P11 { color:#000000; font-size:12pt; line-height:150%;  writing-mode:horizontal-tb; direction:ltr; margin-right:0cm; text-indent:-0.7cm; background-color:#ffffff; padding-bottom:0.499cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
    .P11_borderEnd { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.499cm;  writing-mode:horizontal-tb; direction:ltr;margin-left:1.7cm; margin-right:0cm; text-indent:-0.7cm; background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
    .P12_borderStart { color:#000000; font-size:12pt; line-height:150%; margin-top:0cm;  writing-mode:horizontal-tb; direction:ltr;margin-left:2.3cm; margin-right:0cm; text-indent:-0.801cm; background-color:#ffffff; padding-bottom:0.499cm;  border-bottom-style:none; }
    .P12 { color:#000000; font-size:12pt; line-height:150%;  writing-mode:horizontal-tb; direction:ltr; margin-right:0cm;  background-color:#ffffff; padding-bottom:0.499cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
    .P12_borderEnd { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.499cm;  writing-mode:horizontal-tb; direction:ltr;margin-left:2.3cm; margin-right:0cm; text-indent:-0.801cm; background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
    .P13_borderStart { color:#000000; font-size:12pt; line-height:150%; margin-top:0cm;  writing-mode:horizontal-tb; direction:ltr; margin-left:2.701cm; margin-right:0cm; text-align:left ! important; text-indent:-0.6cm; background-color:#ffffff; padding-bottom:0.499cm;  border-bottom-style:none; }
    .P13 { color:#000000; font-size:12pt; line-height:150%;  writing-mode:horizontal-tb; direction:ltr; margin-right:0cm; text-align:left ! important;  background-color:#ffffff; padding-bottom:0.499cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
    .P13_borderEnd { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.499cm;  writing-mode:horizontal-tb; direction:ltr; margin-left:2.701cm; margin-right:0cm; text-align:left ! important; text-indent:-0.6cm; background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
    .P14_borderStart { color:#000000; font-size:12pt; line-height:150%; margin-top:0cm;  writing-mode:horizontal-tb; direction:ltr; margin-left:2.701cm; margin-right:0cm; text-align:left ! important; text-indent:-0.6cm; background-color:#ffffff; padding-bottom:0.499cm;  border-bottom-style:none; }
    .P14 { color:#000000; font-size:12pt; line-height:150%;  writing-mode:horizontal-tb; direction:ltr;  margin-right:0cm; text-align:left ! important;  background-color:#ffffff; padding-bottom:0.499cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
    .P14_borderEnd { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.499cm;  writing-mode:horizontal-tb; direction:ltr; margin-left:2.701cm; margin-right:0cm; text-align:left ! important; text-indent:-0.6cm; background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
    .P15_borderStart { color:#2a6099; font-size:12pt; line-height:100%; margin-top:0cm;  writing-mode:horizontal-tb; direction:ltr; text-align:left ! important; font-weight:bold; background-color:#ffffff; padding-bottom:0.247cm;  border-bottom-style:none; }
    .P15 { color:#2a6099; font-size:12pt; line-height:100%;  writing-mode:horizontal-tb; direction:ltr; text-align:left ! important; font-weight:bold; background-color:#ffffff; padding-bottom:0.247cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
    .P15_borderEnd { color:#2a6099; font-size:12pt; line-height:100%; margin-bottom:0.247cm;  writing-mode:horizontal-tb; direction:ltr; text-align:left ! important; font-weight:bold; background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
    .P2_borderStart { color:#000000; font-size:6pt; line-height:150%; margin-top:0cm;  writing-mode:horizontal-tb; direction:ltr;background-color:#ffffff; padding-bottom:0.499cm;  border-bottom-style:none; }
    .P2 { color:#000000; font-size:6pt; line-height:150%;  writing-mode:horizontal-tb; direction:ltr;background-color:#ffffff; padding-bottom:0.499cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
    .P2_borderEnd { color:#000000; font-size:6pt; line-height:150%; margin-bottom:0.499cm;  writing-mode:horizontal-tb; direction:ltr;background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
    .P3_borderStart { color:#000000; font-size:6pt; line-height:150%; margin-top:0cm;  writing-mode:horizontal-tb; direction:ltr;background-color:#ffffff; padding-bottom:0.499cm;  border-bottom-style:none; }
    .P3 { color:#000000; font-size:6pt; line-height:150%;  writing-mode:horizontal-tb; direction:ltr;background-color:#ffffff; padding-bottom:0.499cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
    .P3_borderEnd { color:#000000; font-size:6pt; line-height:150%; margin-bottom:0.499cm;  writing-mode:horizontal-tb; direction:ltr;background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
    .P4_borderStart { color:#000000; font-size:12pt; line-height:150%; margin-top:0cm;  writing-mode:horizontal-tb; direction:ltr;background-color:#ffffff; padding-bottom:0.499cm;  border-bottom-style:none; }
    .P4 { color:#000000; font-size:12pt; line-height:150%;  writing-mode:horizontal-tb; direction:ltr;background-color:#ffffff; padding-bottom:0.499cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
    .P4_borderEnd { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.499cm;  writing-mode:horizontal-tb; direction:ltr;background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
    .P5_borderStart { color:#2a6099; font-size:22pt; line-height:150%; margin-top:0cm;  writing-mode:horizontal-tb; direction:ltr;text-align:left ! important; font-weight:bold; background-color:#ffffff; padding-bottom:0.499cm;  border-bottom-style:none; }
    .P5 { color:#2a6099; font-size:22pt; line-height:150%;  writing-mode:horizontal-tb; direction:ltr;text-align:left ! important; font-weight:bold; background-color:#ffffff; padding-bottom:0.499cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
    .P5_borderEnd { color:#2a6099; font-size:22pt; line-height:150%; margin-bottom:0.499cm;  writing-mode:horizontal-tb; direction:ltr;text-align:left ! important; font-weight:bold; background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
    .P6_borderStart { color:#2a6099; font-size:18pt; line-height:150%; margin-top:0cm;  writing-mode:horizontal-tb; direction:ltr;font-weight:bold; background-color:#ffffff; padding-bottom:0.499cm;  border-bottom-style:none; }
    .P6 { color:#2a6099; font-size:18pt; line-height:150%;  writing-mode:horizontal-tb; direction:ltr;font-weight:bold; background-color:#ffffff; padding-bottom:0.499cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
    .P6_borderEnd { color:#2a6099; font-size:18pt; line-height:150%; margin-bottom:0.499cm;  writing-mode:horizontal-tb; direction:ltr;font-weight:bold; background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
    .P7_borderStart { color:#000000; font-size:12pt; line-height:150%; margin-top:0cm;  writing-mode:horizontal-tb; direction:ltr; text-align:left ! important; background-color:#ffffff; padding-bottom:0.247cm;  border-bottom-style:none; }
    .P7 { color:#000000; font-size:12pt; line-height:150%;  writing-mode:horizontal-tb; direction:ltr; text-align:left ! important; background-color:#ffffff; padding-bottom:0.247cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
    .P7_borderEnd { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.247cm;  writing-mode:horizontal-tb; direction:ltr; text-align:left ! important; background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
    .P8 { color:#2a6099; font-size:12pt;  writing-mode:horizontal-tb; direction:ltr; line-height:100%; text-align:left ! important; font-weight:bold; background-color:#ffffff; }
    .P9_borderStart { color:#000000; font-size:12pt; line-height:150%; margin-top:0cm;  writing-mode:horizontal-tb; direction:ltr;margin-left:1.7cm; margin-right:0cm; text-indent:-0.7cm; background-color:#ffffff; padding-bottom:0.499cm;  border-bottom-style:none; }
    .P9 { color:#000000; font-size:12pt; line-height:150%;  writing-mode:horizontal-tb; direction:ltr; margin-right:0cm; text-indent:-0.7cm; background-color:#ffffff; padding-bottom:0.499cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
    .P9_borderEnd { color:#000000; font-size:12pt; line-height:150%; margin-bottom:0.499cm;  writing-mode:horizontal-tb; direction:ltr;margin-left:1.7cm; margin-right:0cm; text-indent:-0.7cm; background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
    .Bullet_20_Symbols { font-family:OpenSymbol; }
    .Internet_20_link { color:#000080; text-decoration:underline; }
    .ListLabel_20_28 {  }
    .ListLabel_20_29 {  }
    .ListLabel_20_30 {  }
    .ListLabel_20_31 {  }
    .ListLabel_20_32 {  }
    .ListLabel_20_33 {  }
    .ListLabel_20_34 {  }
    .ListLabel_20_35 {  }
    .ListLabel_20_36 {  }
    .ListLabel_20_37 {  }
    .ListLabel_20_38 {  }
    .ListLabel_20_39 {  }
    .ListLabel_20_40 {  }
    .ListLabel_20_41 {  }
    .ListLabel_20_42 {  }
    .ListLabel_20_43 {  }
    .ListLabel_20_44 {  }
    .ListLabel_20_45 {  }
    .ListLabel_20_55 {  }
    .ListLabel_20_56 {  }
    .ListLabel_20_57 {  }
    .ListLabel_20_58 {  }
    .ListLabel_20_59 {  }
    .ListLabel_20_60 {  }
    .ListLabel_20_61 {  }
    .ListLabel_20_62 {  }
    .ListLabel_20_63 {  }
    .T1 {  font-size:10pt; font-weight:bold; background-color:#ffffff; }
    .T2 {  font-size:10pt; background-color:#ffffff; }
    .T3 { color:#000000; }
    .T4 { color:#000000; }
    .T5 { color:#000000; }
    /* ODF styles with no properties representable as CSS */
    .ListLabel_20_46 .ListLabel_20_47 .ListLabel_20_48 .ListLabel_20_49 .ListLabel_20_50 .ListLabel_20_51 .ListLabel_20_52 .ListLabel_20_53 .ListLabel_20_54 .T6  { }
    </style>
    <link rel="stylesheet" type="text/css" href="css_js/expln°style.css" />


</head>

<body class="mb-0">



    <container_main class="container">

    <container class="auto-mx ">

<div id="" class=" d-flex align-items-center justify-content-center">
    <?php 
    include_once "10. Situation précaire ou difficile.html"; 
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