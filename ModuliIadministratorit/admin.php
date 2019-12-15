<?php require 'header.php'; ?>
<head>
    <style>
    input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  /* background-color: #8A8A8A; */
  box-sizing: border-box;
}
input[type=submit] {
  width: 50%;
  background-color: #6B6B6B;
  color: white;
  padding: 14px 20px;
  margin: 8px 25%;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
#del {
    width: 40%;
  background-color: #6B6B6B;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-align: center;
}
@media screen and (max-width: 600px) {
    #del {
        padding:13px 23px 13px 2px;
        text-align: left;
        text-align: center;
    }
}
    </style>
</head>
<div class="row">
<div class="12u">
<section id="content" >
    <h1 style="font-size: 4em; text-align:center">Inserto Admin</h1>
    <form action="Core/insert.php" method="post">
    <input type="text" name="name">
    <input type="text" name="password">
    <input type="submit" name="submitA" value="inserto">
    </form>
</section>
</div>
</div>
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
        <td><input type="text" name="password" value="<?= $AID ?>"></td>
        <input type="hidden" value="<?=$AID ?>" name="UID">
		<td><input id="del" type="submit" name="submit" value="Edito">
		 | <a id="" href="Core/delete.php?uid=<?= $AID ?>&tname=admin"
		onClick="return confirm('Are you sure you want to delete?')">
         <input  id="del" value="Fshi"></a></td></tr>
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