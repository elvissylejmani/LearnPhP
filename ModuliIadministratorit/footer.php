
<!-- Footer -->
<div id="footer">
				<div class="container">
					<div class="row">
						<div class="3u">
							<section id="box1">
								<header>
								<?php
								mysqli_next_result($conn);
								$result = mysqli_query($conn,"CALL selectfootersidebartitle()");
								$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
								extract($row);
							

								?>
									<h2> <?= $Title ?></h2>
								</header>
								<div class="12u">
<section id="content" >

    <h2 style="text-align:center; color:#ccc">shto titull</h2>
	<form action="Core/insert.php" method="post">
	<input type="text" name="title">
	<input type="submit" name="submitSFT" value="inserto">
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
	$res = mysqli_query($conn,"CALL selectallsidebarfooter()");
	while($row = mysqli_fetch_array($res)){
		
	?>
	
	<form action="Core/edit.php" method="POST">
	<tr bgcolor='#6B6B6B' style="width: 100%">
	<td><input type="text" name="title" value="<?= $row['Title'] ?>"></td>
	<input type="hidden" value="<?=$row['ID'] ?>" name="UID">
<td><input id="del" type="submit" name="submitSFT" value="Edito">
		 |  <a id="" href="Core/delete.php?uid=<?=$row['ID'] ?>&tname=footersidebar_php&ID=ID&url=index"
		onClick="return confirm('Are you sure you want to delete?')">
		 <input  id="del" value="Fshi"></a></td>
		</tr>
	</form>
	<?php } ?>

					</table>
							</div>
							</section>
				</div> 
				
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
											<div class="12u">
<section id="content" >

    <h2 style="text-align:center; color:#ccc">shto te dhena me lart</h2>
	<form action="Core/insert.php" method="post">
	<input type="text" placeholder="Channel" name="channel">
	<input type="text"  placeholder="Video Title" name="title">
	<input type="text"  placeholder="Video link" name="link">
	<input type="submit" name="submitIVF" value="inserto">
    </form>
</section>
</div>
<div class="12u">
							<section id="content" >
							<div class="" style="margin-bottom: 2em">
							<table id="tableres" width='100%' border=0>
								


	<?php
	mysqli_next_result($conn);
	$res = mysqli_query($conn,"CALL selectallvideos()");
	while($row = mysqli_fetch_array($res)){
		
	?>
	
	<form action="Core/edit.php" method="POST">
	<tr bgcolor='#6B6B6B' style="width: 100%">
	<td style="text-align: center; color:#ccc">Shto video linqe</td>
	</tr>
	<tr bgcolor='#6B6B6B' style="width: 100%">
	<td><input type="text" name="channel" value="<?= $row['YoutubeChannel'] ?>"></td>
	</tr>
	
	<tr bgcolor='#6B6B6B' style="width: 100%">
	<td style="text-align: center; color:#ccc">Titulli</td>
	</tr>
	<tr bgcolor='#6B6B6B' style="width: 100%">
	<td><input type="text" name="title" value="<?= $row['YoutubeVideoTitle'] ?>"></td>
	</tr>
	<tr bgcolor='#6B6B6B' style="width: 100%">
	<td style="text-align: center; color:#ccc">Linku</td>
	</tr>
	<tr bgcolor='#6B6B6B' style="width: 100%">
	<td><input type="text" name="link" value="<?= $row['YoutubeVideoLink'] ?>"></td>
	</tr>
	<tr bgcolor='#6B6B6B' style="width: 100%">
	<td style="text-align: center; color:#ccc">Modifiko</td>
	</tr>
	<tr bgcolor='#6B6B6B' style="width: 100%">
	<input type="hidden" value="<?=$row['ID'] ?>" name="UID">
<td><input id="del" type="submit" name="submitVF" value="Edito">
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
								<div> <a href="" class="image full"><img src="<?php echo 'data:image/jpeg;base64,'. base64_encode($Pic) ?>" alt=""></a> </div>
							</section>
							<div class="3u">
<section id="content" >

    <h2 style="text-align:center; font-size:2em; color:#ccc">shto foto</h2>
	<form action="Core/insert.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="MAX_FILE_SIZE" value="10000000"  />
    <input name="image" style="margin-left: 13rem" type="file" style="color:white"; required />
	<input type="submit" name="submitSFF" value="inserto">
    </form>
</section>
</div>
						</div>
						<div class="6u">
							<section id="content" >
							<div class="" style="margin-bottom: 2em">
							<table id="tableres" width='100%' border=0>
	<tr bgcolor='#CCCCCC'>
		<td>Titulli</td>
		<td>Modifiko</td>
	</tr>

	<?php
	mysqli_next_result($conn);
	$res = mysqli_query($conn,"CALL selectallfooterpic()");
	while($row = mysqli_fetch_array($res)){
		
	?>
	
	<form enctype="multipart/form-data" action="Core/edit.php" method="POST">
	<tr bgcolor='#6B6B6B' style="width: 100%">
	<input type="hidden" value="<?=$row['ID'] ?>" name="UID">
	<td style="width: 50%;"><?= '<img style="width:33%" alt="" src="data:images/jpeg;base64,'.base64_encode($row['Pic']).'"/>'?>
	<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
     <input name="img" type="file" style="color:white"; />
</td>
<td><input id="del" type="submit" name="submitFP" value="Edito">
		 |  <a id="" href="Core/delete.php?uid=<?=$row['ID'] ?>&tname=footerpicture&ID=ID&url=index"
		onClick="return confirm('Are you sure you want to delete?')">
		 <input  id="del" value="Fshi"></a></td>
		</tr>
	</form>
	<?php } ?>

					</table>
							</div>
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
								<div class="12u">
<section id="content" >

    <h2 style="text-align:center; color:#ccc">shto titull</h2>
	<form action="Core/insert.php" method="post">
	<input type="text" name="title">
	<input type="submit" name="submitRFT" value="inserto">
    </form>
</section>
</div>
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