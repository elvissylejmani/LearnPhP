<?php require 'header.php'; ?>

<form action="" method="post">  
Search username : <input type="text" name="term" /> 
<input type="submit" value="Search" />  
</form> 
<table width='80%' border=0>
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
		echo "<tr>";
		echo "<td>".$row['username']."</td>";
		echo "<td>".$row['password']."</td>";
		echo "<td><a href=\"edit.php?uid=$row[AID]\">
		Edit</a> | <a href=\"delete.php?uid=$row[AID]\"
		onClick=\"return confirm('Are you sure you want to delete?')\">
		Delete</a></td></tr>";		
	}
}
?>
	</table>



<?php include 'footer.php'; ?>