<html>
<head>
<title>View All</title>
<style>
body
{
	background-image:url('library2.jpg');
	background-repeat:no-repeat;
	background-position:center;
	background-size:cover;
	color:Red;
}
</style>
</head>
<body>
<big><b>
<?php
require('connect.php');
$sql="select * from library";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "Book Name:".$row['Book_name']."<br>";
		echo "Author:".$row['Author']."<br>";
		echo "Publisher:".$row['Publisher']."<br>";
		echo "Quantity:".$row['Quantity']."<br>";
		echo "Prize:".$row['Prize']."<br><br>";
	}
}
else
{
	echo "No Results";
}
mysqli_close($conn);
?>
</big></b>
</body>
</html>