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
		<style>
			#del {
    width: 40%;
  background-color: #8A8A8A;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-align: center;
}
input[type=submit] {
  width: 50%;
  background-color: #8A8A8A;
  color: white;
  padding: 14px 20px;
  margin: 8px 25%;
  border: none;
  border-radius: 4px;
  cursor: pointer;
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
@media screen and (max-width: 600px) {
    #del {
        padding:13px 23px 13px 2px;
        text-align: left;
        text-align: center;
	}
	#tableres td{
		display: block;
	}
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
			<div class="row">
<div class="12u">
<section id="content" >

    <h1 style="font-size: 4em; text-align:center; color:#ccc">shto te dhena</h1>
    <form action="Core/insert.php" method="post" enctype="multipart/form-data">
    <input type="text" name="title" required>
    <input type="text" name="des" required>
	<input type="hidden" name="MAX_FILE_SIZE" value="10000000"  />
	<input name="img" type="file" style="color:white"; required />
	<input type="submit" name="submitH" value="inserto">
    </form>
</section>
</div>
</div>
				<div class=""> 
				<div class="12u">
							<section id="content" >
							<div class="" style="margin-bottom: 2em">
							<table id="tableres" width='100%' border=0>
	<tr bgcolor='#CCCCCC'>
		<td>Titulli</td>
		<td>Nentitulli</td>
		<td>Foto</td>
		<td>Modifiko</td>
	</tr>

	<?php
	mysqli_next_result($conn);
	$res = mysqli_query($conn,"CALL selectallheader()");
	while($row = mysqli_fetch_array($res)){
		
	?>
	
	<form enctype="multipart/form-data" action="Core/edit.php" method="POST">
	<tr bgcolor='#6B6B6B' style="width: 100%">
	<td><input type="text" name="title" value="<?= $row['Title'] ?>"></td>
	<td> <input type="text" name="description" id="" value="<?= $row['Description'] ?>"></td>
	<input type="hidden" value="<?=$row['ID_Header'] ?>" name="UID">
	<td style="width: 50%;"><?= '<img style="width:33%" alt="" src="data:images/jpeg;base64,'.base64_encode($row['Picture']).'"/>'?>
	<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
     <input name="img" type="file" style="color:white"; />
</td>
<td><input id="del" type="submit" name="submith" value="Edito">
		 |  <a id="" href="Core/delete.php?uid=<?=$row['ID_Header'] ?>&tname=header_php&ID=ID_header&url=index"
		onClick="return confirm('Are you sure you want to delete?')">
		 <input  id="del" value="Fshi"></a></td>
		</tr>
	</form>
	<?php } ?>

					</table>
							</div>
							</section>
				</div>
				</div>
			
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