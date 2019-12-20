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
	$content = utf8_decode($_POST['content']);
	$button =  $_POST['button'];
    $link = $_POST['link'];
    $id = $_POST['UID'];
    echo mysqli_query($conn,"CALL updatemid('$title','$content','$button','$link','$id')");
    header("Location: ../index.php");
    
}
elseif (isset($_POST['submitSRT'])) {
	$title = $_POST['title'];
    $id = $_POST['UID'];
    echo mysqli_query($conn,"CALL updaterightsidebar('$title','$id')");
    header("Location: ../index.php");
    
}
elseif (isset($_POST['submitSFT'])) {
	$title = $_POST['title'];
    $id = $_POST['UID'];
    echo mysqli_query($conn,"CALL updatefootersidebar('$title','$id')");
    header("Location: ../index.php");
    
}
elseif (isset($_POST['submitFP'])) {
    $uid = $_POST['UID'];
    if(!empty($_FILES['img']['tmp_name'])) {
    $image= addslashes(file_get_contents($_FILES['img']['tmp_name']));
    $maxsize = 10000000; //set to approx 10 MB
    mysqli_query($conn,"CALL updatefooterpic('$image','$uid')");
    header("Location: ../index.php");
}
}
elseif (isset($_POST['submitVF'])) {
    $channel = $_POST['channel'];
    $title = $_POST['title'];
    $link = $_POST['link'];
    $id = $_POST['UID'];
   

    mysqli_query($conn,"CALL editvideo('$channel','$title','$link','$id')");
    header("Location: ../index.php");

}
elseif (isset($_POST['submitRFT'])) {
    $title = $_POST['title'];
    $id = $_POST['UID'];

    echo mysqli_query($conn,"CALL editrft('$title','$id')");
    header("Location: ../index.php");

}
elseif (isset($_POST['submitOC'])) {
    $title = $_POST['title'];
    $link = $_POST['link'];
    $id = $_POST['UID'];
   

    mysqli_query($conn,"CALL editOC('$title','$link','$id')");
    header("Location: ../index.php");

}
elseif (isset($_POST['submitOC'])) {
    $title = $_POST['Name'];
    $link = $_POST['Email'];
    $link = $_POST['Content'];
    $id = $_POST['UID'];
    mysqli_query($conn,"CALL editOC('$title','$link','$id')");
    header("Location: ../index.php");

}
elseif (isset($_POST['submitC'])) {
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $content = $_POST['content'];
    $id = $_POST['UID'];
    mysqli_query($conn,"CALL editC('$Name','$Email','$content','$id')");
    header('Location: ../contact.php');
}
elseif (isset($_POST['submitB'])) {
    $id = $_POST['UID'];
   echo $Name = $_POST['name'];
    echo $id;
    $row = mysqli_query($conn,"CALL selectfilewithid('$id')");
    mysqli_next_result($conn);
    $res = mysqli_fetch_array($row);
    echo $res['name'];
    if (file_exists('../../ModuliIPerdoruesit/uploads/' . $res['name'])) {
        echo mysqli_query($conn,"CALL editfile('$Name','$id')");
       rename('../../ModuliIPerdoruesit/uploads/' .$res['name'],'../../ModuliIPerdoruesit/uploads/' .$Name);
}
   
    header('Location: ../contact.php');
}



