<?php require VIEW_ROOT . '/templates/header.php';?>
	
	<h2>Edit article</h2>
	<form action="<?php echo BASE_URL; ?>/admin/edit.php" method="POST">

		<label for="title">
			Title:
			<input type="text" name="title" id="title" value="<?php echo $article['title']; ?>">
		</label>

		<label for="image">
			Image:
			<input type="text" name="image" id="image" value="<?php echo $article['image']; ?>">
		</label>

		<label for="label">
			Label:
			<input type="text" name="label" id="label" value="<?php echo $article['label']; ?>">
		</label>

		<label for="slug">
			Slug:
			<input type="text" name="slug" id="slug" value="<?php echo $article['slug']; ?>">
		</label>

		<label for="content">
			Content:
			<textarea rows="15" cols="50" name="content" id="content">
			<?php echo $article['content']; ?>
			</textarea>
		</label>

		 <input type="hidden" value="<?php echo $article['id'] ?>" name="id">
		 <input type="submit" value="Edit">

	</form>

<?php require VIEW_ROOT . '/templates/footer.php';?>