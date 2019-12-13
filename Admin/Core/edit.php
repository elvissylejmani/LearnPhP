<?php
require 'Boot.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['UID'];
    mysqli_query($conn,"CALL updateadmin('$username','$password','$id')");

    header("Location: ../admin.php");
}



