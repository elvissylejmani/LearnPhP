<?php
require 'header.php';
if (!empty($_SESSION['InsertedData'])) {
	echo "<script type='text/javascript'>alert('Mezashi i dergua me suksese');</script>";
	$_SESSION['InsertedData'] = null;
}
?>
		<head>
			<style>
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
textarea {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  /* background-color: #8A8A8A; */ 
  font-size: 16px;
  resize: none;
}

.newdiv {
  border-radius: 5px;
  background-color: #323338;
  padding: 20px;
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
h1{
	color: #ccc;
	text-align: center;
}

			</style>
		</head>	
			<div id="page">
				<div class="container">
					<div class="row">
						<div class="12u">
							<section id="content" >
									<div class="container">  
										<div class="newdiv">
											<form id="contact" action="Core/insert.php" method="post">
											<?php
								mysqli_free_result($result);  
								mysqli_next_result($conn);
								$result = mysqli_query($conn,"CALL selectcontact()");
								$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
								extract($row);
							

								?>
											  <h1><?= $Title ?></h1>
											  <input type="text" id="fname" name="name" placeholder="Emri">
											  <input type="text" id="fname" name="email" placeholder="Emaili">
											  <textarea name="Content" placeholder="Mesazhi"></textarea>
											  <input type="submit" name="submit" value="Submit">
											</form>
										  </div>
										  </div>
									</section>
						</div>
					</div>
					<div class="row">
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
	$res = mysqli_query($conn,"CALL selectallcontact()");
	while($row = mysqli_fetch_array($res)){
		
	?>
	
	<form enctype="multipart/form-data" action="Core/edit.php" method="POST">
	<tr bgcolor='#6B6B6B' style="width: 100%">
	<td><input type="text" name="Name" value="<?= $row['Name'] ?>"></td>
	<td> <input type="text" name="Email" id="" value="<?= $row['Email'] ?>"></td>
	<!-- <td> <input type="text" name="description" id="" value=""></td> -->
	<td ><textarea style="position: relative; top: 16px;"  name="content" id="" cols="30" rows="10"> <?= $row['Content'] ?></textarea> </td>
	<input type="hidden" value="<?=$row['ID'] ?>" name="UID">
	
<td><input id="del" type="submit" name="submitC" value="Edito">
		 |  <a id="" href="Core/delete.php?uid=<?=$row['ID'] ?>&tname=Contact&ID=ID&url=contact"
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

				</div>	
			</div>


		<?php require 'footer.php' ?>
			
		</div>
	</body>
</html>