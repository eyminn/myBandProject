<?php 
	include 'config.php';
	include 'database.php';
	 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$insert = 'INSERT INTO `contactdata`(`name`, `email`, `subject`, `message`) VALUES ("' . $name . '" , "' . $email . '" , "' . $subject . '" , "' . $message . '")';

	$mysqli -> query($insert) or die(mysqli_error());

	header('Location: ' . '../');
 ?>