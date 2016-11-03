<?php 
	

	require '../app/start.php';

	if (!empty($_POST)) {
		$id = $_POST['id'];
		$title = $_POST['title'];
		$label = $_POST['label'];
		$slug = $_POST['slug'];
		$content = $_POST['content'];
		$image = $_POST['image'];

		$updateArticle = $db->prepare("UPDATE newsarticles SET id = :id, title = :title, label = :label, slug = :slug, content = :content, image = :image, updated = NOW() WHERE id = :id");

		$updateArticle->execute([
			'id' => $id,
			'title' => $title,
			'label' => $label,
			'slug' => $slug,
			'content' => $content,
			'image' => $image,
			]);

		header('Location: ' . BASE_URL . '/admin/index.php');
	}

	if (!isset($_GET['id'])){
		header('Location: ' . BASE_URL . '/admin/index.php');
		die();
	}

	$article = $db->prepare("SELECT id, title, label, slug, content, image FROM newsarticles WHERE id = :id");

	$article->execute(['id' => $_GET['id']]);

	$article = $article->fetch(PDO::FETCH_ASSOC);
	require  VIEW_ROOT . '/admin/edit.php';
 ?>