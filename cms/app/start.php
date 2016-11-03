<?php 

ini_set('display_errors', 'On');

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '/views');
define('BASE_URL', 'http://localhost/BAE/myBand2/cms');

$db = new PDO('mysql:host=localhost;dbname=school', 'root', '');

 ?>