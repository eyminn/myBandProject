<?php

$resultevents = $mysqli->query("SELECT * FROM events ORDER BY datum DESC");
$resultevents = e($resultevents);

$result2 = $mysqli->query("SELECT * FROM aboutpage");
$result2 = ContentAbout($result2);

$result3 = $mysqli->query("SELECT * FROM menu");
$result3 = Menu($result3);