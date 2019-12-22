<?php
require 'Boot.php';
session_start();
$message = '';

if (isset($_POST['submit'])) {
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo("$email ky email nuk eshte valid");
	  }
	  else{
	$Content = mysqli_real_escape_string($conn,$_POST['Content']);
	$result = mysqli_query($conn,"CALL insertcontact('$name','$email','$Content')");
	$_SESSION['InsertedData'] = true ;
	header("Location: ../contact.php");
	  }
}


?>