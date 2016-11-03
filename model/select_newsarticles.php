<?php

$resultevents = $mysqli->query("SELECT * FROM events ORDER BY datum DESC LIMIT 3");
$resultevents = e($resultevents);

$resultTableEvents = $mysqli->query("SELECT * FROM events ORDER BY datum DESC");
$resultTableEvents = e($resultTableEvents);

$result2 = $mysqli->query("SELECT * FROM aboutpage");
$result2 = e($result2);

$result3 = $mysqli->query("SELECT * FROM menu");
$result3 = e($result3);