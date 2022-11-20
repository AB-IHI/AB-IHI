<?php 
echo "<!--";
var_dump($_SESSION['view']) ;
echo " view   and  ";
var_dump($_SESSION['page']);
echo "-->";

include_once $_SESSION['page'] . ".php";
// include_once  "footer.php";
?>
