<?php require VIEW_ROOT . '/templates/header.php';?>

	<?php if(!$article): ?>

		<p>Sorry, no page found.</p>

	<?php else: ?>

		<h2><?php echo $article['title']; ?></h2>

		<p class="faded">Created on: <?php echo $article['date_created']->format('jS M Y'); ?></p>

		<p class="faded"><?php if ($article['updated']): ?>
			Last updated: <?php echo $article['updated']->format('jS M Y h : i a'); ?>
		<?php endif; ?></p>

		<img src="../img/<?php  echo $article['image']; ?>">

		<p><?php echo $article['content']; ?></p>

	<?php endif; ?>

<?php require VIEW_ROOT . '/templates/footer.php';?>