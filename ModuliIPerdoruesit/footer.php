
<!-- Footer -->
<div id="footer">
				<div class="container">
					<div class="row">
						<div class="3u">
							<section id="box1">
								<header>
								<?php
								mysqli_free_result($result);  
								mysqli_next_result($conn);
								$result = mysqli_query($conn,"CALL selectfootersidebartitle()");
								$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
								extract($row);
							

								?>
									<h2> <?= $Title ?></h2>
								</header>
								<ul class="style3">
								<?php
										mysqli_free_result($result);  
										mysqli_next_result($conn);
										$result = mysqli_query($conn,"CALL selectvideos()");
										if($result != null)
										while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
											{ 
												extract($row);
										
										
										?>	
									<li class="first">
										<p class="date"><a href="#"><?= $YoutubeChannel ?></a></p>
										<p><a href="<?= $YoutubeVideoLink ?>"><?= $YoutubeVideoTitle ?></a></p>
									</li>
											<?php } ?>
									
								</ul>
							</section>
						</div>
						<div class="6u">
							<section id="box2">
							<?php
								mysqli_free_result($result);  
								mysqli_next_result($conn);
								$result = mysqli_query($conn,"CALL selectfooterpicture()");
								$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
								extract($row);
							

								?>
								<div> <a href="" class="image full"><img src="data:image/jpg;base64,<?= base64_encode($Pic) ?>" alt=""></a> </div>
							</section>
						</div>
						<div class="3u">
							<section id="box3">
								<header>
								<?php
								mysqli_free_result($result);  
								mysqli_next_result($conn);
								$result = mysqli_query($conn,"CALL selectfootersidebar()");
								$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
								extract($row);
							

								?>
									<h2><?= $Title ?></h2>
								</header>
								<ul class="style1">
								<?php
										mysqli_free_result($result);  
										mysqli_next_result($conn);
										$result = mysqli_query($conn,"CALL selectcourses()");
										if($result != null)
										while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
											{ 
												extract($row);
										?>
									<li><a href="<?= $CourseLink ?>"><?= $CourseTitle ?></a></li>
											<?php } ?>				
								</ul>
							</section>
						</div>
					</div>
				</div>
			</div>
			<div class="6u" style="text-align: center; position:relative;left:12rem; color:black">
					<?php $visits = 1;
			if (isset($_COOKIE["visits"])){
				$visits = (int)$_COOKIE["visits"]; }
				$Month = 2592000 + time();
				setcookie("visits", date("F jS - g:i a"), $Month);
				if(isset($_COOKIE['visits']))
				{
					$last = $_COOKIE['visits'];
					echo "<p style='text-align:right;'>Vizita juaj e fundit ishte me: " .$last."</p>";
				}
				else
				{ echo "<p style='text-align:right;'>Vizita juaj e parë në webaplikacionin tonë! Ju dëshirojmë mirëseardhje!</p>";
				}
			?>
			</div>

			<!-- Copyright -->
			<div id="copyright">
				<div class="container">
					Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
				</div>
			</div>

			<ul>
				<li>	
				https://www.activelava.net/storage/photos/shares/php-illustration.png

				</li>
				<li>
				https://i.ytimg.com/vi/wCZ5TJCBWMg/maxresdefault.jpg
				</li>
				<li>
				http://freecodecamp.com/
				</li>
				<li>
				https://www.youtube.com/channel/UC8butISFwT-Wl7EV0hUK0BQ
				</li>
				<li>
				https://www.udemy.com/course/learn-object-oriented-php-by-building-a-complete-website/
				</li>
			</ul>