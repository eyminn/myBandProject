<?php 
	require '../app/start.php';

	if (isset($_GET['id'])) {
		$deleteArticle = $db->prepare(" DELETE FROM newsarticles where id = :id");

		$deleteArticle->execute(['id' => $_GET['id']]);
	}

	header('Location: ' . BASE_URL . '/admin/index.php');
 ?>