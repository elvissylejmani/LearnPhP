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


			<!-- Footer -->
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="3u">
							<section id="box1">
								<header>
									<h2>Nulla facilisi</h2>
								</header>
								<ul class="style3">
									<li class="first">
										<p class="date"><a href="#">10.03.2012</a></p>
										<p><a href="#">Vestibulum sem magna, elementum ut, vestibulum facilisis. Nulla facilisi. Cum sociis natoque penatibus.</a></p>
									</li>
									<li>
										<p class="date"><a href="#">10.03.2012</a></p>
										<p><a href="#">Pellentesque erat erat, tincidunt in, eleifend, malesuada bibendum. Suspendisse sit amet  in eros bibendum condimentum. </a> </p>
									</li>
								</ul>
							</section>
						</div>
						<div class="6u">
							<section id="box2">
								<header>
									<h2>Donec dictum metus</h2>
								</header>
								<div> <a href="#" class="image full"><img src="images/pics02.jpg" alt=""></a> </div>
								<p>Nulla enim eros, porttitor eu, tempus id, varius non, nibh. Duis enim nulla, luctus eu, dapibus lacinia, venenatis id, quam. Vestibulum imperdiet, magna nec eleifend rutrum, nunc lectus vestibulum velit, euismod lacinia quam nisl id lorem. Quisque erat. Vestibulum pellentesque, justo mollis pretium suscipit, justo nulla blandit libero, in blandit augue justo quis nisl.</p>
							</section>
						</div>
						<div class="3u">
							<section id="box3">
								<header>
									<h2>Gravida ipsum</h2>
								</header>
								<ul class="style1">
									<li class="first"><a href="#">Pellentesque quis elit non lectus eleifend purus condimentum.</a></li>
									<li><a href="#">Lorem ipsum dolort, consectetuer adipiscing dictum metus sapien.</a></li>
									<li><a href="#">Phasellus nec dictum metus in sapien pellentesque congue.</a></li>
									<li><a href="#">Cras vitae metus aliquam risus dictum metus in sapien pharetra.</a></li>
									<li><a href="#">Duis non dictum metus in sapien ante in metus commodo euismod lobortis.</a></li>
								</ul>
							</section>
						</div>
					</div>
				</div>
			</div>

			<!-- Copyright -->
			<div id="copyright">
				<div class="container">
					Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
				</div>
			</div>
			
		</div>
	</body>
</html>