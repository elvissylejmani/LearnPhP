<?php
require 'Boot.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['UID'];
    mysqli_query($conn,"CALL updateadmin('$username','$password','$id')");

    header("Location: ../admin.php");
}
elseif (isset($_POST['submith'])) {
    $uid = $_POST['UID'];
    $title=$_POST['title'];
    $des=$_POST['description'];
    if(!empty($_FILES['img']['tmp_name'])) {
    $image= addslashes(file_get_contents($_FILES['img']['tmp_name']));
    $maxsize = 10000000; //set to approx 10 MB
    mysqli_query($conn,"CALL updatepictureheader('$image','$uid')");
}
mysqli_query($conn,"CALL updateheader('$title','$des','$uid')");


header("Location: ../index.php");


}
elseif (isset($_POST['submitm'])) {
	$menu = $_POST['menu'];
	$link = $_POST['link'];
	$admin = $_POST['admin'];
    $id = $_POST['UID'];
    mysqli_query($conn,"CALL editmenu('$menu','$link','$admin','$id')");
    header("Location: ../index.php");
    
}
elseif (isset($_POST['submitST'])) {
	$title = $_POST['title'];
    $id = $_POST['UID'];
    mysqli_query($conn,"CALL editsidebartitle('$title','$id')");
    header("Location: ../index.php");
    
}
elseif (isset($_POST['submitSA'])) {
	$lang = $_POST['lang'];
	$title = $_POST['title'];
	$link = $_POST['link'];
    $id = $_POST['UID'];
    mysqli_query($conn,"CALL updatesidebararticle('$lang','$title','$link','$id')");
    header("Location: ../index.php");
    
}
elseif (isset($_POST['submitSM'])) {
	$title = $_POST['title'];
	$content = $_POST['content'];
	$button = $_POST['button'];
    $link = $_POST['link'];
    $id = $_POST['UID'];
    echo mysqli_query($conn,"CALL updatemid('$title','$content','$button','$link','$id')");
    header("Location: ../index.php");
    
}



