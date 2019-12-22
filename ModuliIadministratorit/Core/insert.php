<?php
require 'Boot.php';
session_start();
$message = '';

if (isset($_POST['submit'])) {
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$Content = mysqli_real_escape_string($conn,$_POST['Content']);
	$result = mysqli_query($conn,"CALL insertcontact('$name','$email','$Content')");
	$_SESSION['InsertedData'] = true ;
	header("Location: ../contact.php");
}
elseif (isset($_POST['submitA'])) {
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$password = mysqli_real_escape_string($conn,MD5($_POST['password']));
	mysqli_query($conn,"CALL insertadmin('$name','$password')");
	header('Location: ../admin.php');

}
elseif (isset($_POST['submitH'])) {
	$title = mysqli_real_escape_string($conn,$_POST['title']);
	$des = mysqli_real_escape_string($conn,$_POST['des']);
	$image= addslashes(file_get_contents($_FILES['img']['tmp_name']));
	$maxsize = 10000000; //set to approx 10 MB
	 mysqli_query($conn,"CALL insertHeader('$title','$des','$image')");
	 header('Location: ../index.php');

}
elseif (isset($_POST['submitm'])) {
	 $menu = mysqli_real_escape_string($conn,$_POST['menu']);
	 $link = mysqli_real_escape_string($conn,$_POST['link']);
	 $admin = mysqli_real_escape_string($conn,$_POST['pergj']);
	mysqli_query($conn,"CALL insertmenu('$menu','$link','$admin')");
	header('Location: ../index.php');

}
elseif (isset($_POST['submitST'])) {
	 $title = mysqli_real_escape_string($conn,$_POST['title']);
	mysqli_query($conn,"CALL sidebartitleinsert('$title')");
	header('Location: ../index.php');

}
elseif (isset($_POST['submitsa'])) {
	 $lang = mysqli_real_escape_string($conn,$_POST['lang']);
	 $title = mysqli_real_escape_string($conn,$_POST['title']);
	 $link = mysqli_real_escape_string($conn,$_POST['link']);
	mysqli_query($conn,"CALL insertsidebararticle('$lang','$title','$link')");
	header('Location: ../index.php');

}
elseif (isset($_POST['submitsm'])) {
	$title = mysqli_real_escape_string($conn,$_POST['title']);
	$content = mysqli_real_escape_string($conn,utf8_decode($_POST['content']));
	 $button = mysqli_real_escape_string($conn,$_POST['button']);
	 $link = mysqli_real_escape_string($conn,$_POST['link']);
	 mysqli_query($conn,"CALL insertmidarticle('$title','$content','$button','$link')");
	header('Location: ../index.php');
}
elseif (isset($_POST['submitsrt'])) {
    $title = mysqli_real_escape_string($conn,$_POST['title']);
	echo mysqli_query($conn,"CALL insertrightsidear('$title')");
    header('Location: ../index.php');
}
elseif (isset($_POST['submitSFT'])) {
    $title = mysqli_real_escape_string($conn,$_POST['title']);
	 mysqli_query($conn,"CALL insertfooter('$title')");
    header('Location: ../index.php');
}
elseif (isset($_POST['submitSFF'])) {
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$maxsize = 10000000; //set to approx 10 MB

    mysqli_query($conn,"CALL insertfooterpic('$image')");
    header('Location: ../index.php');
}
elseif (isset($_POST['submitIVF'])) {
    $channel = mysqli_real_escape_string($conn,$_POST['channel']);
    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $link = mysqli_real_escape_string($conn,$_POST['link']);
	 mysqli_query($conn,"CALL insertvideos('$channel','$title','$link')");
    header('Location: ../index.php');
}
elseif (isset($_POST['submitRFT'])) {
    $title = mysqli_real_escape_string($conn,$_POST['title']);
	 mysqli_query($conn,"CALL insertrt('$title')");
    header('Location: ../index.php');
}




?>