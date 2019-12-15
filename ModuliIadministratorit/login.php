<?php require 'Core/Boot.php';
	session_start();
	if (isset($_SESSION['username'])) 
	header('Location: index.php');

?>
<!-- /Header -->

<!DOCTYPE HTML>
<!--
	Synchronous by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Synchronous by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style1.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<style>
			
.newdiv {
  border-radius: 5px;
  background-color: #323338;
  padding: 20px;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  /* background-color: #8A8A8A; */
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  /* background-color: #8A8A8A; */
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: #6B6B6B;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #8A8A8A;
}

		</style>
	</head>
	<body class="homepage">
		
		<div id="wrapper">
			
			<!-- Header -->
			<?php
							$result = mysqli_query($conn,"CALL SelectHeader_php()");
							$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
							extract($row);
							
							?>
			<?= '<div id="header" style="background: url(data:image/jpg;base64,'.base64_encode($Picture) .') no-repeat center; background-size: cover;">'?>
			<div id="">
				<div class="container"> 
					<div class="row">
						<div class="12u">
							<section id="content" >
						    	<div class="container">  
								<div class="newdiv">
										<form action="Core/login.php" method="POST">
												<h1 style="color:#ccc">Hyrë</h1>
												<input type="text" id="fname" name="username" placeholder="Emri">
											    <input type="password" id="fname" name="password" placeholder="Fjalëkalimi">
												<input type="submit" name="submit" value="Hyrë">
												<?php if (!empty($_SESSION['IncorrectPassword'])) {
													echo "Ky email apo password nuk egziston";
												} ?>
										</form>
							     </div>		
								</div>
							</section>
						</div>
					</div>

				</div>	
				</div>
			</div>
			<div id="copyright">
				<div class="container">
					Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
				</div>
			</div>
</body>

			