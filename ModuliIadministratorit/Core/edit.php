<?php
require 'Boot.php';
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,md5($_POST['password']));
    $id = mysqli_real_escape_string($conn,$_POST['UID']);
    mysqli_query($conn,"CALL updateadmin('$username','$password','$id')");

    header("Location: ../admin.php");
}
elseif (isset($_POST['submith'])) {
    $uid = mysqli_real_escape_string($conn,$_POST['UID']);
    $title=mysqli_real_escape_string($conn,$_POST['title']);
    $des=mysqli_real_escape_string($conn,$_POST['description']);
    if(!empty($_FILES['img']['tmp_name'])) {
    $image= addslashes(file_get_contents($_FILES['img']['tmp_name']));
    $maxsize = 10000000; //set to approx 10 MB
    mysqli_query($conn,"CALL updatepictureheader('$image','$uid')");
}
mysqli_query($conn,"CALL updateheader('$title','$des','$uid')");


header("Location: ../index.php");


}
elseif (isset($_POST['submitm'])) {
	$menu = mysqli_real_escape_string($conn,$_POST['menu']);
	$link = mysqli_real_escape_string($conn,$_POST['link']);
	$admin = mysqli_real_escape_string($conn,$_POST['admin']);
    $id = mysqli_real_escape_string($conn,$_POST['UID']);
    mysqli_query($conn,"CALL editmenu('$menu','$link','$admin','$id')");
    header("Location: ../index.php");
    
}
elseif (isset($_POST['submitST'])) {
	$title = mysqli_real_escape_string($conn,$_POST['title']);
    $id = mysqli_real_escape_string($conn,$_POST['UID']);
    mysqli_query($conn,"CALL editsidebartitle('$title','$id')");
    header("Location: ../index.php");
    
}
elseif (isset($_POST['submitSA'])) {
	$lang = mysqli_real_escape_string($conn,$_POST['lang']);
	$title = mysqli_real_escape_string($conn,$_POST['title']);
	$link = mysqli_real_escape_string($conn,$_POST['link']);
    $id = mysqli_real_escape_string($conn,$_POST['UID']);
    mysqli_query($conn,"CALL updatesidebararticle('$lang','$title','$link','$id')");
     header("Location: ../index.php");
    
}
elseif (isset($_POST['submitSM'])) {
	$title = mysqli_real_escape_string($conn,$_POST['title']);
	$content = mysqli_real_escape_string($conn,utf8_decode($_POST['content']));
	$button =  mysqli_real_escape_string($conn,$_POST['button']);
    $link = mysqli_real_escape_string($conn,$_POST['link']);
    $id = mysqli_real_escape_string($conn,$_POST['UID']);
    echo mysqli_query($conn,"CALL updatemid('$title','$content','$button','$link','$id')");
    header("Location: ../index.php");
    
}
elseif (isset($_POST['submitSRT'])) {
	$title = mysqli_real_escape_string($conn,$_POST['title']);
    $id = mysqli_real_escape_string($conn,$_POST['UID']);
    echo mysqli_query($conn,"CALL updaterightsidebar('$title','$id')");
    header("Location: ../index.php");
    
}
elseif (isset($_POST['submitSFT'])) {
	$title = mysqli_real_escape_string($conn,$_POST['title']);
    $id = mysqli_real_escape_string($conn,$_POST['UID']);
    echo mysqli_query($conn,"CALL updatefootersidebar('$title','$id')");
    header("Location: ../index.php");
    
}
elseif (isset($_POST['submitFP'])) {
    $uid = mysqli_real_escape_string($conn,$_POST['UID']);
    if(!empty($_FILES['img']['tmp_name'])) {
    $image= addslashes(file_get_contents($_FILES['img']['tmp_name']));
    $maxsize = 10000000; //set to approx 10 MB
    mysqli_query($conn,"CALL updatefooterpic('$image','$uid')");
    header("Location: ../index.php");
}
}
elseif (isset($_POST['submitVF'])) {
    $channel = mysqli_real_escape_string($conn,$_POST['channel']);
    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $link = mysqli_real_escape_string($conn,$_POST['link']);
    $id = mysqli_real_escape_string($conn,$_POST['UID']);
   

    mysqli_query($conn,"CALL editvideo('$channel','$title','$link','$id')");
    header("Location: ../index.php");

}
elseif (isset($_POST['submitRFT'])) {
    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $id = mysqli_real_escape_string($conn,$_POST['UID']);

    echo mysqli_query($conn,"CALL editrft('$title','$id')");
    header("Location: ../index.php");

}
elseif (isset($_POST['submitOC'])) {
    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $link = mysqli_real_escape_string($conn,$_POST['link']);
    $id = mysqli_real_escape_string($conn,$_POST['UID']);
   

    mysqli_query($conn,"CALL editOC('$title','$link','$id')");
    header("Location: ../index.php");

}
elseif (isset($_POST['submitOC'])) {
    $title = mysqli_real_escape_string($conn,$_POST['Name']);
    $link = mysqli_real_escape_string($conn,$_POST['Email']);
    $link = mysqli_real_escape_string($conn,$_POST['Content']);
    $id = mysqli_real_escape_string($conn,$_POST['UID']);
    mysqli_query($conn,"CALL editOC('$title','$link','$id')");
    header("Location: ../index.php");

}
elseif (isset($_POST['submitC'])) {
    $Name = mysqli_real_escape_string($conn,$_POST['Name']);
    $Email = mysqli_real_escape_string($conn,$_POST['Email']);
    $content = mysqli_real_escape_string($conn,$_POST['content']);
    $id = mysqli_real_escape_string($conn,$_POST['UID']);
    mysqli_query($conn,"CALL editC('$Name','$Email','$content','$id')");
    header('Location: ../contact.php');
}
elseif (isset($_POST['submitB'])) {
    $id =mysqli_real_escape_string($conn, $_POST['UID']);
    $Name = mysqli_real_escape_string($conn,$_POST['name']);
    $row = mysqli_query($conn,"CALL selectfilewithid('$id')");
    mysqli_next_result($conn);
    $res = mysqli_fetch_array($row);

    if (file_exists('../../ModuliIPerdoruesit/uploads/' . $res['name'])) {
        echo mysqli_query($conn,"CALL editfile('$Name','$id')");
       rename('../../ModuliIPerdoruesit/uploads/' .$res['name'],'../../ModuliIPerdoruesit/uploads/' .$Name);
}
   
    header('Location: ../contact.php');
}



