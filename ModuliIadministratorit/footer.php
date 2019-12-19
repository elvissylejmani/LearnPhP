
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