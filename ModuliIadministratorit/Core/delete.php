<?php
require 'Boot.php';
$id = $_GET['uid'];
$tname = $_GET['tname'];
$cname = $_GET['ID'];
mysqli_query($conn,"CALL deleteD('$tname','$cname','$id')");
header('Location: ../admin.php');









?>