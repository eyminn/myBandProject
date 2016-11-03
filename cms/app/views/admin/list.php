<?php require VIEW_ROOT . '/templates/header.php';?>

	<?php  if(empty($articles)): ?>
		<p>No articles at the moment</p>
	<?php else: ?>
		<table>
			<thead>
				<tr>
					<th>Label</th>
					<th>Title</th>
					<th>Slug</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($articles as $article): ?>
					<tr>
						<td><?php echo $article['label']; ?></td>
						<td><?php echo substr($article['title'], 0, 15); ?></td>
						<td><a href="<?php echo BASE_URL; ?>/article.php?page=<?php echo $article['slug']; ?>"><?php echo $article['slug']; ?></a></td>
						<td><a href="<?php echo BASE_URL; ?>/admin/edit.php?id=<?php echo $article['id']; ?>">Edit</a></td>
						<td><a href="<?php echo BASE_URL; ?>/admin/delete.php?id=<?php echo $article['id']; ?>">Delete</a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	<?php endif; ?>

	<a href="<?php echo BASE_URL; ?>/admin/add.php">Add a new article</a>

<?php require VIEW_ROOT . '/templates/footer.php';?>