<?php
/*forgot what this code does and what's this file for*/
/*var_dump($_GET['a_v_usr']);*/
    if (isset($_GET['a_v_usr'])) {
        $_SESSION['a_v_usr'] = $_GET['a_v_usr'];
/* var_dump($_SESSION['a_v_usr']);*/
    }