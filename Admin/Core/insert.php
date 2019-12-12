<?php
require 'Boot.php';


if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$Content = $_POST['Content'];
   
    
	$result = mysqli_query($conn,"CALL insertcontact('$name','$email','$Content')");
}


?>