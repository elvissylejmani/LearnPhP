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
<div class="12u">
							<section id="content" >
							<div class="" style="margin-bottom: 2em">
							<table id="tableres" width='100%' border=0>
	<tr bgcolor='#CCCCCC'>
		<td>Titulli</td>
		<td>Modifiko</td>
	</tr>

	<?php
	mysqli_next_result($conn);
	$res = mysqli_query($conn,"CALL selectallsidebar()");
	while($row = mysqli_fetch_array($res)){
		
	?>
	
	<form action="Core/edit.php" method="POST">
	<tr bgcolor='#6B6B6B' style="width: 100%">
	<td><input type="text" name="title" value="<?= $row['Sidebar_Title'] ?>"></td>
	<input type="hidden" value="<?=$row['Sidebar_ID'] ?>" name="UID">
<td><input id="del" type="submit" name="submitST" value="Edito">
		 |  <a id="" href="Core/delete.php?uid=<?=$row['Sidebar_ID'] ?>&tname=sidebar_php_title&ID=Sidebar_ID&url=index"
		onClick="return confirm('Are you sure you want to delete?')">
		 <input  id="del" value="Fshi"></a></td>
		</tr>
	</form>
	<?php } ?>

					</table>
							</div>
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
								<div class="12u">
<section id="content" >

    <h2 style="text-align:center; font-size:2em; color:#ccc">shto artikull</h2>
	<form action="Core/insert.php" method="post">
	<input type="text" name="lang" >
	<input type="text" name="title">
	<input type="text" name="link">
	<input type="submit" name="submitsa" value="inserto">
    </form>
</section>
</div>
								<div class="12u">
							<section id="content" >
							<div class="" style="margin-bottom: 2em">
							<table id="tableres" width='100%' border=0>
								


	<?php
	mysqli_next_result($conn);
	$res = mysqli_query($conn,"CALL selectallarticle()");
	while($row = mysqli_fetch_array($res)){
		
	?>
	
	<form action="Core/edit.php" method="POST">
	<tr bgcolor='#6B6B6B' style="width: 100%">
	<td style="text-align: center; color:#ccc">Gjuha programuese</td>
	</tr>
	<tr bgcolor='#6B6B6B' style="width: 100%">
	<td><input type="text" name="lang" value="<?= $row['Article_ProgLang'] ?>"></td>
	</tr>
	
	<tr bgcolor='#6B6B6B' style="width: 100%">
	<td style="text-align: center; color:#ccc">Titulli</td>
	</tr>
	<tr bgcolor='#6B6B6B' style="width: 100%">
	<td><input type="text" name="title" value="<?= $row['Article_Title'] ?>"></td>
	</tr>
	<tr bgcolor='#6B6B6B' style="width: 100%">
	<td style="text-align: center; color:#ccc">Linku</td>
	</tr>
	<tr bgcolor='#6B6B6B' style="width: 100%">
	<td><input type="text" name="link" value="<?= $row['Article_Link'] ?>"></td>
	</tr>
	<tr bgcolor='#6B6B6B' style="width: 100%">
	<td style="text-align: center; color:#ccc">Modifiko</td>
	</tr>
	<tr bgcolor='#6B6B6B' style="width: 100%">
	<input type="hidden" value="<?=$row['Article_PHP'] ?>" name="UID">
<td><input id="del" type="submit" name="submitSA" value="Edito">
		 |  <a id="" href="Core/delete.php?uid=<?=$row['Article_PHP'] ?>&tname=sidebar_article_php&ID=Article_PHP&url=index"
		onClick="return confirm('Are you sure you want to delete?')">
		 <input  id="del" value="Fshi"></a></td>
		</tr>
	</form>
	<?php } ?>

					</table>
							</div>
							</section>
				</div>
												


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