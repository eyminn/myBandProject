<?php 

require 'app/start.php';


$articles = $db->query("SELECT id, label, slug, FROM newsarticles ORDER BY id")->fetchAll(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/home.php';
 ?>