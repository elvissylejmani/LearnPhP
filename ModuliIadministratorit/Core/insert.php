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
	 header('Location: ../index.php');

}
elseif (isset($_POST['submitm'])) {
	 $menu = $_POST['menu'];
	 $link = $_POST['link'];
	 $admin = $_POST['pergj'];
	mysqli_query($conn,"CALL insertmenu('$menu','$link','$admin')");
	header('Location: ../index.php');

}
elseif (isset($_POST['submitST'])) {
	 $title = $_POST['title'];
	mysqli_query($conn,"CALL sidebartitleinsert('$title')");
	header('Location: ../index.php');

}
elseif (isset($_POST['submitsa'])) {
	 $lang = $_POST['lang'];
	 $title = $_POST['title'];
	 $link = $_POST['link'];
	mysqli_query($conn,"CALL insertsidebararticle('$lang','$title','$link')");
	header('Location: ../index.php');

}
elseif (isset($_POST['submitsm'])) {
	$title = $_POST['title'];
	$content = utf8_decode($_POST['content']);
	 $button = $_POST['button'];
	 $link = $_POST['link'];
	 mysqli_query($conn,"CALL insertmidarticle('$title','$content','$button','$link')");
	header('Location: ../index.php');
}
elseif (isset($_POST['submitsrt'])) {
    $title = $_POST['title'];
	echo mysqli_query($conn,"CALL insertrightsidear('$title')");
    header('Location: ../index.php');
}
elseif (isset($_POST['submitSFT'])) {
    $title = $_POST['title'];
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
    $channel = $_POST['channel'];
    $title = $_POST['title'];
    $link = $_POST['link'];
	 mysqli_query($conn,"CALL insertvideos('$channel','$title','$link')");
    header('Location: ../index.php');
}
elseif (isset($_POST['submitRFT'])) {
    $title = $_POST['title'];
	 mysqli_query($conn,"CALL insertrt('$title')");
    header('Location: ../index.php');
}



?>