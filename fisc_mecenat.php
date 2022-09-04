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
    .P10 { font-size:12pt; line-height:150%; margin-bottom:0.499cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; margin-left:1.7cm; margin-right:0cm; text-indent:-0.7cm; }
    .P11 { font-size:12pt; line-height:150%; margin-bottom:0.499cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; margin-left:1.7cm; margin-right:0cm; text-indent:-0.7cm; }
    .P12 { font-size:12pt; line-height:150%; margin-bottom:0.499cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; margin-left: -0.2cm; margin-right:0cm; text-indent: 7.7px; }
    .P13 { font-size:12pt; line-height:150%; margin-bottom:0.499cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; margin-left: -0.2cm; margin-right:0cm; text-indent: 7.7px; }
    .P14 { font-size:12pt; line-height:150%; margin-bottom:0.499cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; margin-left: -0.2cm; margin-right:0cm; text-indent: 7.7px; }
    .P15 { font-size:12pt; line-height:150%; margin-bottom:0.499cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; margin-left:1.7cm; margin-right:0cm; text-indent:20.7px; }
    .P16 { font-size:12pt; line-height:150%; margin-bottom:0.499cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr;  margin-right:0cm }
    .P17 { font-size:12pt; line-height:150%; margin-bottom:0.499cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr;  margin-left: -0.2cm; margin-right:0cm; text-indent: 7.7px; }
    .P2 { font-size:18pt; font-weight:bold; margin-bottom:0.212cm; margin-top:0.423cm; text-align:left ! important; font-family:Liberation Sans; writing-mode:horizontal-tb; direction:ltr; line-height:150%; }
    .P3 { font-size:18pt; font-weight:bold; margin-bottom:0.212cm; margin-top:0.423cm; text-align:left ! important; font-family:Liberation Sans; writing-mode:horizontal-tb; direction:ltr; }
    .P4_borderStart { font-size:6pt; margin-top:0cm; text-align:left ! important; font-family:Tahoma; writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; line-height:150%; text-indent:0cm; font-weight:normal; background-color:#ffffff; padding-bottom:0.499cm;  border-bottom-style:none; }
    .P4 { font-size:6pt; text-align:left ! important; font-family:Tahoma; writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; line-height:150%; text-indent:0cm; font-weight:normal; background-color:#ffffff; padding-bottom:0.499cm; padding-top:0cm;  border-top-style:none; border-bottom-style:none; }
    .P4_borderEnd { font-size:6pt; margin-bottom:0.499cm; text-align:left ! important; font-family:Tahoma; writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; line-height:150%; text-indent:0cm; font-weight:normal; background-color:#ffffff; padding-top:0cm;  border-top-style:none;}
    .P5 { font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; }
    .P6 { font-size:12pt; line-height:150%; margin-bottom:0.247cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; }
    .P7 { font-size:12pt; line-height:150%; margin-bottom:0.499cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; margin-left:0cm; margin-right:0cm; text-indent:0cm; }
    .P8 { font-size:12pt; line-height:150%; margin-bottom:0.499cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr; margin-right:0cm; }
    .P9 { font-size:12pt; line-height:150%; margin-bottom:0.499cm; margin-top:0cm; text-align:left ! important; font-family:Liberation Serif; writing-mode:horizontal-tb; direction:ltr;  margin-right:0cm; text-indent:-0.7cm; }
    .Internet_20_link { color:#000080; text-decoration:underline; }
    .T1 { color:#00a933; font-family:Tahoma; font-size:14pt; font-weight:bold; }
    .T10 { color:#000000; font-family:Tahoma; font-size:12pt; font-weight:normal; background-color:#ffffff; }
    .T11 { color:#000000; font-family:Tahoma; font-size:12pt; background-color:#ffffff; text-indent: 7.7px;}
    .T12 { color:#000000; font-family:Tahoma; font-size:10pt; font-style:normal; font-weight:bold; }
    .T13 { color:#000000; font-family:Tahoma; font-size:10pt; font-weight:normal; }
    .T14 { color:#000000; font-family:Tahoma; font-size:10pt; font-weight:normal; background-color:#ffffff; }
    .T15 { color:#000000; font-family:Tahoma; font-size:10pt; font-weight:bold; background-color:#ffffff; }
    .T16 { color:#000000; font-family:Tahoma; font-size:10pt; background-color:#ffffff; }
    .T17 { color:#000000; font-family:Tahoma; font-size:12pt; background-color:#ffffff; }
    .T2 { color:#2a6099; font-family:Tahoma; font-size:39pt; }
    .T4 { font-family:Tahoma; font-size:12pt; font-weight:bold; }
    .T6 { font-family:Tahoma; font-size:10pt; }
    .T7 { font-family:Tahoma; font-size:10pt; font-weight:normal; }
    .T8 { font-family:Tahoma; font-size:10pt; }
    .T9 { color:#000000; font-family:Tahoma; font-size:12pt; font-weight:normal; }
    /* ODF styles with no properties representable as CSS */
    .ListLabel_20_1 .ListLabel_20_10 .ListLabel_20_11 .ListLabel_20_12 .ListLabel_20_13 .ListLabel_20_14 .ListLabel_20_15 .ListLabel_20_16 .ListLabel_20_17 .ListLabel_20_18 .ListLabel_20_19 .ListLabel_20_2 .ListLabel_20_20 .ListLabel_20_21 .ListLabel_20_22 .ListLabel_20_23 .ListLabel_20_24 .ListLabel_20_25 .ListLabel_20_26 .ListLabel_20_27 .ListLabel_20_3 .ListLabel_20_4 .ListLabel_20_5 .ListLabel_20_6 .ListLabel_20_7 .ListLabel_20_8 .ListLabel_20_9  { }
    </style>
    <link rel="stylesheet" type="text/css" href="css_js/expln°style.css" />


</head>

<body class="mb-0">



    <container_main class="container">

    <container class="auto-mx ">

<div id="" class=" d-flex align-items-center justify-content-center">
    <?php 
    include_once "2. Le régime fiscal de mécénat.html"; 
    ?>
</div>

</container>

<container class="auto-mx hid_btn_xl">
<!-- 
<article class="article">
    <div class="container px-4 py-5">
        <div id="featured" class="d-flex align-items-center justify-content-center">
            <a id="a_​_Voir_" href="y_storage/Règlement sur les bénévoles.pdf"><div class="T2 Tcustom">Voir+</div></a>
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
<script type='text/javascript' src='css_js/js/JavaScript.js'></script>

</html>