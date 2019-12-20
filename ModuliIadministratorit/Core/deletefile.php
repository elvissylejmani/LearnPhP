<?php
require 'Boot.php';
echo $id = $_GET['uid'];
$file = $_GET['name'];
mysqli_query($conn,"CALL deletefile('$id')");
if (unlink('../../ModuliIPerdoruesit/uploads/'.$file)) {
    header('Location: ../index.php');
}