<?php 
	require '../app/start.php';

	$articles = $db->query("SELECT id, label, slug, title FROM newsarticles ORDER BY date_created DESC")->fetchAll(PDO::FETCH_ASSOC);

	require  VIEW_ROOT . '/admin/list.php';


 ?>