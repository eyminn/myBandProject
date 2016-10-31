<?php



$result2 = $mysqli->query("SELECT * FROM aboutpage");
$result2 = ContentAbout($result2);

$result3 = $mysqli->query("SELECT * FROM menu");
$result3 = Menu($result3);