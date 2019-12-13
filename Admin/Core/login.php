<?php
session_start();
require 'Boot.php';
$error = "";
if (isset($_POST["submit"])) {
  if (empty($_POST["username"]) || empty($_POST["password"]) ) {
    $error = "both fields are required";
  }
  else {
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $result=mysqli_query($conn,"CALL selectuser('$username','$password')");
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if (mysqli_num_rows($result) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['IncorrectPassword'] = null;
      header("Location: ../index.php");
    }else {
      $_SESSION['IncorrectPassword'] = true;
      header("Location: ../login.php");
    }
  }
}