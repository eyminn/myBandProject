<?php 

	require '../app/start.php';


	if (!empty($_POST)) {
		$title 		= $_POST['title'];
		$image 		= $_POST['image'];
		$label 		= $_POST['label'];
		$slug 		= $_POST['slug'];
		$content 	= $_POST['content'];

		$insertArticle = $db->prepare(" INSERT INTO newsarticles (title, label, slug, content, image, date_created) VALUES (:title, :label, :slug, :content, :image, NOW())");

		$insertArticle ->execute([
			'title' => $title,
			'label' => $label,
			'slug' => $slug,
			'content' => $content,
			'image' => $image
			]);

		header('Location: ' . BASE_URL . '/admin/index.php');
	}
	require VIEW_ROOT . '/admin/add.php';
 ?>