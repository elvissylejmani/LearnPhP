<?php
require 'Boot.php';
$id = $_GET['uid'];
$tname = $_GET['tname'];
$cname = $_GET['ID'];
$link = $_GET['url'];
mysqli_query($conn,"CALL deleteD('$tname','$cname','$id')");
header('Location: ../'.$link . '.php');









?>