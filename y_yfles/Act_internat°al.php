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
    <link rel="stylesheet" type="text/css" href="../css_js/expln°style.css" />


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
<script type='text/javascript' src='../css_js/js/popper.min.js'></script>
<script type='text/javascript' src='../css_js/js/bootstrap.js'></script>
<script type='text/javascript' src='css_js/js/JavaScript.js'></script>

</html>