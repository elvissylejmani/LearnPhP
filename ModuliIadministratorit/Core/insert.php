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
elseif (isset($_POST['submitH'])) {
	$title = $_POST['title'];
	$des = $_POST['des'];
	$image= addslashes(file_get_contents($_FILES['img']['tmp_name']));
	$maxsize = 10000000; //set to approx 10 MB
	 mysqli_query($conn,"CALL insertHeader('$title','$des','$image')");
	 header('Location: ../admin.php');

}


?>