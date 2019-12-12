<?php
require 'header.php';


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
											  <h3><?= $Title ?></h3>
											  <input type="text" id="fname" name="name" placeholder="Your name..">
											  <input type="text" id="fname" name="email" placeholder="Your name..">
											  <textarea>Some text...</textarea>
											  <input type="submit" name="Content" value="Submit">
											</form>
										  </div>
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