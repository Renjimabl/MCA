<html>
<head>
<title>Update</title>
<style>
body
{
	background-image:url('library2.jpg');
	background-repeat:no-repeat;
	background-position:center;
	background-size:cover;
	
}
</style>
</head>
<body>
<big><b>
<form method="post"action="update2.php">
<?php
require('connect.php');
if(isset($_POST['sub']))
{
$id=$_POST['txt1'];
$sql="select * from library where Id=$id";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "ID:"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='id' value=".$row['Id']."><br>";
		echo "Book Name:"."&nbsp;<input type='text' name='bn' value=".$row['Book_name']."><br>";
		echo "Author:"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='at' value=".$row['Author']."><br>";
		echo "Publisher:"."&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='pub' value=".$row['Publisher']."><br>";
		echo "Quantity:"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='qn' value=".$row['Quantity']."><br>";
		echo "Prize:"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='pz' value=".$row['Prize']."><br><br>";
	}
}
mysqli_close($conn);
}
?>
<input type="submit" name="sub1" value="Update">
</form>
</big></b>
</body>
</html>