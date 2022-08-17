<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$c = mysqli_connect("127.0.0.1", "root", "", "ihi");
mysqli_set_charset($c, "utf8");

if ($c->connect_error) {
    die("Connection failed: " . $c->connect_error);
}
