			<?php require 'header.php';
			
			
			
			
			?>
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
									$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
									extract($row);
								?>
									<h2><?= $Sidebar_Title ?></h2>
									
<div class="12u">
<section id="content" >

    <h2 style="text-align:center; color:#ccc">shto titull</h2>
	<form action="Core/insert.php" method="post">
	<input type="text" name="title">
	<input type="submit" name="submitST" value="inserto">
    </form>
</section>
</div>
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
			<?php require 'footer.php'?>
		</div>
	</body>
</html>