<!-- not in the view because it's a simple text page w links -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>IHI</title>
<!--    <link rel="stylesheet" type="text/css" href="../css_js/css/bootstrap.css" />-->

 <style>
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
     .P1 { font-size:12pt; margin-bottom:0cm; margin-top:0cm; text-align:center ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; }
     .P10 { font-size:12pt; line-height:150%; margin-bottom:0.499cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; }
     .P11 { font-size:12pt; line-height:150%; margin-bottom:0.499cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr;  margin-right:0cm; text-indent:-1.7cm; }
     .P12 { font-size:12pt; line-height:150%; margin-bottom:0.499cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; text-indent:0cm; }
     .P13 { font-size:12pt; line-height:150%; margin-bottom:0.499cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; text-indent:0cm; }
     .P14 { font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; }
     .P15 { font-size:10pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; }
     .P16 { font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; }
     .P3 { font-size:18pt; font-weight:bold; margin-bottom:0.212cm; margin-top:0.423cm; text-align:left ! important; font-family:Liberation Sans; writing-mode:horizontal-tb; direction:ltr; line-height:150%; }
     .P4 { font-size:18pt; font-weight:bold; margin-bottom:0.212cm; margin-top:0.423cm; text-align:left ! important; font-family:Liberation Sans; writing-mode:horizontal-tb; direction:ltr; line-height:150%; }
     .P5 { font-size:12pt; line-height:150%; margin-bottom:0.499cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; text-indent:0cm; }
     .P6_borderStart { font-size:6pt; line-height:150%; margin-top:0cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; text-indent:0cm; color:#000000; background-color:#ffffff; padding-bottom:0.499cm;  border-bottom-style:none; }
     .P6 { font-size:6pt; line-height:150%; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; text-indent:0cm; color:#000000; background-color:#ffffff; padding-bottom:0.499cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
     .P6_borderEnd { font-size:6pt; line-height:150%; margin-bottom:0.499cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; text-indent:0cm; color:#000000; background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
     .P7_borderStart { font-size:12pt; line-height:150%; margin-top:0cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; text-indent:0cm; color:#000000; background-color:#ffffff; padding-bottom:0.499cm;  border-bottom-style:none; }
     .P7 { font-size:12pt; line-height:150%; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; text-indent:0cm; color:#000000; background-color:#ffffff; padding-bottom:0.499cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
     .P7_borderEnd { font-size:12pt; line-height:150%; margin-bottom:0.499cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; text-indent:0cm; color:#000000; background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
     .P8_borderStart { font-size:10pt; line-height:150%; margin-top:0cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; text-indent:0cm; color:#000000; font-weight:bold; background-color:#ffffff; padding-bottom:0.499cm;  border-bottom-style:none; }
     .P8 { font-size:10pt; line-height:150%; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; text-indent:0cm; color:#000000; font-weight:bold; background-color:#ffffff; padding-bottom:0.499cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
     .P8_borderEnd { font-size:10pt; line-height:150%; margin-bottom:0.499cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; text-indent:0cm; color:#000000; font-weight:bold; background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
     .P9_borderStart { font-size:6pt; line-height:150%; margin-top:0cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; text-indent:0cm; color:#2a6099; font-weight:bold; background-color:#ffffff; padding-bottom:0.499cm;  border-bottom-style:none; }
     .P9 { font-size:6pt; line-height:150%; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; text-indent:0cm; color:#2a6099; font-weight:bold; background-color:#ffffff; padding-bottom:0.499cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
     .P9_borderEnd { font-size:6pt; line-height:150%; margin-bottom:0.499cm; text-align:left ! important;  writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; text-indent:0cm; color:#2a6099; font-weight:bold; background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
     .Internet_20_link { color:#000080; text-decoration:underline; }
     .ListLabel_20_1 { font-size:12pt; font-weight:normal; }
     .T1 { color:#00a933;  font-size:14pt; font-weight:bold; }
     .T11 {  background-color:#ffffff; }
     .T12 {  font-size:12pt; background-color:#ffffff; }
     .T13 {  font-size:10pt;  }
     .T14 {  font-size:10pt; }
     .T2 { color:#00a933;  font-size:14pt; font-weight:bold; }
     .T3 { color:#2a6099;  font-size:26pt; font-weight:bold; }
     .T5 { color:#2a6099;  font-size:16pt; font-weight:bold; background-color:#ffffff; }
     .T6 { color:#000000;  background-color:#ffffff; }
     .T7 { color:#000000;  font-size:12pt; font-weight:normal; background-color:#ffffff; }
     .T8 { color:#000000;  font-size:10pt; font-weight:bold; background-color:#ffffff; }
     .T9 { color:#000000;  font-size:10pt; font-weight:normal; background-color:#ffffff; }
     /* ODF styles with no properties representable as CSS */
     .ListLabel_20_10 .ListLabel_20_11 .ListLabel_20_12 .ListLabel_20_13 .ListLabel_20_14 .ListLabel_20_15 .ListLabel_20_16 .ListLabel_20_17 .ListLabel_20_18 .ListLabel_20_19 .ListLabel_20_2 .ListLabel_20_3 .ListLabel_20_4 .ListLabel_20_5 .ListLabel_20_6 .ListLabel_20_7 .ListLabel_20_8 .ListLabel_20_9  { }
 </style>

    <link rel="stylesheet" type="text/css" href="../css_js/new.css" />


</head>

<body class="mb-0">



<container_main class="container">

    <container class="auto-mx ">

        <div id="" class=" d-flex align-items-center justify-content-center">
            <?php
            include_once "default.html";
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
    <div id="" class="position-relative">


        <div class="container">
            <div class="position-absolute bottom-0 start-50 translate-middle-x">
                <!--hidden when full width -->
                <p>© 2022 IHI asso</p>
            </div>
        </div>



    </div>
</container_main>
</body>
<script type='text/javascript' src='../css_js/js/popper.min.js'></script>
<script type='text/javascript' src='../css_js/js/bootstrap.js'></script>
<script type='text/javascript' src='css_js/js/main.js'></script>

</html>