<?php

function connexion($nick_mail,$mdp) {
global $c;
//$sql = "SELECT * FROM `users` WHERE `pseudo` = '" . $nick_mail . "' and `mdp`= '". $mdp ."'" ;
$sql = "SELECT count(*) FROM `users` WHERE `pseudo` = '" . $nick_mail . "' and `mdp`= '". $mdp ."'" ;
$exec_requete = mysqli_query($c,$sql);

// echo "<br>";
// var_dump($sql);
// echo "<br>";
// var_dump($exec_requete);
// echo "<br>";
$reponse = mysqli_fetch_array($exec_requete);

//var_dump($reponse);

$sql = "SELECT id FROM `users` WHERE `pseudo` = '" . $nick_mail . "' and `mdp`= '". $mdp ."'" ;
$exec_requete = mysqli_query($c,$sql);
$reponse2 = mysqli_fetch_array($exec_requete);
$_SESSION['id'] = $reponse2;

return $reponse['count(*)'];
}