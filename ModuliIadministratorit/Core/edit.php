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



