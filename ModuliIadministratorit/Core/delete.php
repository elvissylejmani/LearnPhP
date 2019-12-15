<?php
require 'Boot.php';
$id = $_GET['uid'];
$tname = $_GET['tname'];
$cname = "AID";
echo $id;
echo $tname;
echo $cname;
echo "DELETE FROM" . $tname . "Where" . $cname . "=" . $id;
echo mysqli_query($conn,"DELETE FROM " . $tname . " Where " . $cname . "=" . $id );









?>