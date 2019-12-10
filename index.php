			<?php require 'header.php'; ?>
			<!-- /Header -->
			
			<div id="page">
				<div class="container">
					<div class="row">
						<div class="3u">
							<section id="sidebar1">
								<header>
								<?php 
								mysqli_free_result($result);  
								mysqli_next_result($conn);
									$result = mysqli_query($conn,"CALL sidebar_select()");
									while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
									{
									extract($row);
								?>
									<h2><?= $Sidebar_Title ?></h2>
									<?php } ?>
								</header>
								<ul class="style3">
									<?php
										mysqli_free_result($result);  
										mysqli_next_result($conn);
										$result = mysqli_query($conn,"CALL SelectArticle()");
										while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
											{ 
												extract($row);
										
										
										?>											
									<li>
										<p class="date"><?= $Article_ProgLang ?> </p>
										<p><a href="<?= $Article_Link ?>"><?= $Article_Title ?></a></p>
									</li>
									<?php } ?>
								<!--	<li>
										<p class="date"><a href="#">Sep <b>30</b></a></p>
										<p><a href="#">Donec leo, vivamus fermentum nibh in augue praesent urna congue rutrum.</a></p>
									</li>
									<li>
										<p class="date"><a href="#">Sep <b>27</b></a> </p>
										<p><a href="#">Donec leo, vivamus fermentum nibh in augue praesent urna congue rutrum.</a></p>
									</li> -->
								</ul>
							</section>
						</div>
						<div class="6u skel-cell-important">
							<section id="content" >
								<?php 
										mysqli_free_result($result);  
										mysqli_next_result($conn);
										$result = mysqli_query($conn,"CALL SelectMidArticle()");
										$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
										extract($row);
									
								?>
								<header>
									<h2><?= $Article_Title ?></h2>
								</header>
								<p><?= utf8_encode($Article_Content) ?></p>
								<a href="<?= $Article_Link ?>" class="button"><?= $Article_Button ?></a>
							</section>
						</div>
						<div class="3u">
							<section id="sidebard2">
								<?php
								mysqli_free_result($result);  
								mysqli_next_result($conn);
								$result = mysqli_query($conn,"CALL SelectRightSideBar()");
								$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
								extract($row);
							

								?>
								<header>
									<h2><?= $RightSideBar_Title ?></h2>
								</header>
								<ul class="style1">
								<?php
										mysqli_free_result($result);  
										mysqli_next_result($conn);
										$result = mysqli_query($conn,"CALL selectfile()");
										if($result != null)
										while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
											{ 
												extract($row);
										
										
										?>	
									<li><span class="fa fa-check"></span><a href="Core/Uploads.php?file_id=<?=$id?>"><?= $name ?></a></li>
											<?php } ?>
								</ul>
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