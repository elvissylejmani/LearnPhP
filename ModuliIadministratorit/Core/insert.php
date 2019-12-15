<?php
require 'Boot.php';
session_start();
$message = '';

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$Content = $_POST['Content'];
	$result = mysqli_query($conn,"CALL insertcontact('$name','$email','$Content')");
	$_SESSION['InsertedData'] = true ;
	header("Location: ../contact.php");
}
elseif (isset($_POST['submitA'])) {
	$name = $_POST['name'];
	$password = MD5($_POST['password']);
	echo $name;
	echo $password;
	mysqli_query($conn,"CALL insertadmin('$name','$password')");
	header('Location: ../admin.php');

}


?>