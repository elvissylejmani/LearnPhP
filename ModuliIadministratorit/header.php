<?php
session_start();
if (!isset($_SESSION['username'])) 
header('Location: login.php');
require 'Core/Boot.php';
$activePage = basename($_SERVER['PHP_SELF']);
?>

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
			
					<div id="logo">
						<h1><a href="#"><?= $Title ?></a></h1>
						<span><?= $Description ?></span>
					</div>
					
					<!-- Nav -->
					<nav id="nav">
						<ul>
						<?php
						mysqli_free_result($result);  
						mysqli_next_result($conn);
								$result = mysqli_query($conn,"CALL Menu_php()");
								while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
								{
								extract($row);
						?> 
							<li class="<?php if($activePage == $Menu_Link) { echo"active"; } else {echo"";} ?>"><a href="<?= $Menu_Link ?>"><?= $Menu_Name ?></a></li>
									<?php } ?>
						</ul>
					</nav>
				</div>
				</div>
			</div>