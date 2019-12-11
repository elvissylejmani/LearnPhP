<?php
require 'header.php';


?>
		<head>
			<link rel="stylesheet" href="css/contact.css">
		</head>	
			<div id="page">
				<div class="container">
					<div class="row">
						<div class="12u">
							<section id="content" >
									<div class="container">  
											<form id="contact" action="Core/insert.php" method="post">
											<?php
								mysqli_free_result($result);  
								mysqli_next_result($conn);
								$result = mysqli_query($conn,"CALL selectcontact()");
								$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
								extract($row);
							

								?>
											  <h3><?= $Title ?></h3>
											  <fieldset>
												<input placeholder="Your name" name="name" type="text" tabindex="1" required autofocus>
											  </fieldset>
											  <fieldset>
												<input placeholder="Your Email Address" name="email" type="email" tabindex="2" required>
											  </fieldset>
											  <fieldset>
												<textarea placeholder="Type your message here...." name="Content" tabindex="5" required></textarea>
											  </fieldset>
											  <fieldset>
												<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
											  </fieldset>
											  <p class="copyright">Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a></p>
											</form>
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