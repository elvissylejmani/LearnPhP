<?php require 'header.php'; ?>
<div class="row">
						<div class="12u">
							<section id="content" >
                                <div class="container" style="margin-bottom: 2em">
<form action="" method="post">  
Search username : <input type="text" name="term" /> 
<input type="submit" value="Search" />  
</form> 
</div>
<table width='100%' border=0>
	<tr bgcolor='#CCCCCC'>
		<td>username</td>
		<td>password</td>
		<td>Update</td>
	</tr> 
<?php
if (!empty($_REQUEST['term'])) {
    mysqli_free_result($result);  
	mysqli_next_result($conn);
$term = mysqli_real_escape_string
($conn,$_REQUEST['term']);     
$sql = mysqli_query($conn, "CALL selectadmin('$term')"); 
while($row = mysqli_fetch_array($sql)) { 
    extract($row); ?>	
    <form action="Core/edit.php" method="post">	
        <tr>
        <td><input type="text" name="username" value="<?= $username ?>"></td>
        <td><input type="text" name="password" value="<?= $password ?>"></td>
        <input type="hidden" value="<?=$AID ?>" name="UID">
		<td><input type="submit" name="submit" value="submit">
		 | <a href="delete.php?uid=$AID"
		onClick="return confirm('Are you sure you want to delete?')">
        Delete</a></td></tr>
        </form>
        <?php
	}
}
?>
	</table>

                            </section>
                        </div>
</div>

<?php include 'footer.php'; ?>