
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

			<!-- Copyright -->
			<div id="copyright">
				<div class="container">
					Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
				</div>
			</div>