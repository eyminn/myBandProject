<?php require VIEW_ROOT . '/templates/header.php';?>

<?php if (empty($articles) ):?>
		<p>Sorry, no articles at the moment.</p>
<?php else: ?>
		<ul>
			<?php foreach ($articles as $article): ?>

				<li><a href="<?php echo BASE_URL; ?>/article.php?page=<?php echo $article['slug']; ?>"><?php  echo $article['label']?></a></li>

			<?php endforeach; ?>
		</ul>
<?php  endif; ?>

<?php require VIEW_ROOT . '/templates/footer.php';?>


