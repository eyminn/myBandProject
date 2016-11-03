<?php require VIEW_ROOT . '/templates/header.php';?>
	
	<h2>Add a new article</h2>
	<form action="<?php echo BASE_URL; ?>/admin/add.php" method="POST">

		<label for="title">
			Title:
			<input type="text" name="title" id="title">
		</label>

		<label for="image">
			Image:
			<input type="text" name="image" id="image">
		</label>

		<label for="label">
			Label:
			<input type="text" name="label" id="label">
		</label>

		<label for="slug">
			Slug:
			<input type="text" name="slug" id="slug">
		</label>

		<label for="content">
			Content:
			<textarea rows="15" cols="50" name="content" id="content">

			</textarea>
		</label>
		 <input type="submit" value="Add">

	</form>

<?php require VIEW_ROOT . '/templates/footer.php';?>