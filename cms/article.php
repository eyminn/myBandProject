<?php 

require 'app/start.php';

if (empty($_GET['page'])) {
	$article = false;
}else {
	$slug = $_GET['page'];
	$article = $db->prepare("SELECT * FROM newsarticles WHERE slug = :slug LIMIT 1");

	$article->execute(['slug' => $slug]);

	$article = $article->fetch(PDO::FETCH_ASSOC);

	if ($article) {
		$article['date_created'] = new DateTime($article['date_created']);

		if ($article['updated']) {
			$article['updated'] = new DateTime($article['updated']);
		}
	}

}
 require VIEW_ROOT . '/articles/show.php';



 ?>
