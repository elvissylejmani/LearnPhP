<?php
require 'Boot.php';
session_start();
$message = '';

if (isset($_POST['submit'])) {
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo("$email ky email nuk eshte valid");
		header('Refresh: 10; URL=../contact.php');
		?>
		<p>ju do te ktheheni mbrapa per  <span id="counter">10</span> seconda.</p>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'login.php';
    }
if (parseInt(i.innerHTML)!=0) {
    i.innerHTML = parseInt(i.innerHTML)-1;
}
}
setInterval(function(){ countdown(); },1000);
</script>
	  <?php
	  }
	  else{
	$Content = mysqli_real_escape_string($conn,$_POST['Content']);
	$result = mysqli_query($conn,"CALL insertcontact('$name','$email','$Content')");
	$_SESSION['InsertedData'] = true ;
	header("Location: ../contact.php");
	  }
}


?>