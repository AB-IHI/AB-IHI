<?php 
echo "<!-- volunteer.php ; view :";
var_dump($_SESSION['view']) ;
echo "     and page :  ";
var_dump($_SESSION['page']);
echo ";-->";

include_once $_SESSION['page'] . ".php";

if ($_SESSION['page'] == "home" || $_SESSION['page'] == "home_2" ){
 include_once  "footer.php";
}
?>
