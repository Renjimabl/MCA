<html>
<head>
<title>Book Details</title>
<style>
form
{
	background-color:Coral;
}
body
{
	background-image:url('library2.jpg');
	background-repeat:no-repeat;
	background-position:center;
	background-size:cover;
}

* {
  box-sizing: border-box;
}
</style>
</head>
<body>
<?php
require('connect.php');
if(isset($_POST['sub']))
{
	$name=$_POST['Book_name'];
	$author=$_POST['Author'];
	$publisher=$_POST['Publisher'];
	$quantity=$_POST['Quantity'];
	$prize=$_POST['Prize'];
	$sql="insert into library(Book_name,Author,Publisher,Quantity,prize)values('$name','$author','$publisher','$quantity','$prize')";
	$result=mysqli_query($conn,$sql);
if($result)
{
	header('Location: successpage.html');
}
mysqli_close($conn);
}
else
{
?>
<form align="center" method="POST" >
<fieldset>
	<h1><u>Book Details</u></h1>
	
	<label for="book_name">Book_name:</label>
	<input type="text" name="Book_name" id="book_name"><br><br>

	<label for="author">Author:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="Author" id="author"><br><br>

	<label for="pb">Publisher:&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="Publisher" id="pb" ><br><br>

	<label for="qn">Quantity:&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="Quantity" id="qn" ><br><br>
	
	<label for="prize">Prize:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="Prize" id="prize"><br><br>

	<input type="submit" name="sub" id="sub" value="Submit">&nbsp;&nbsp;
	<input type="reset" name="rst" id="rst" value="Reset">
</fieldset>
<?php
}
?>
</form>
</body>
</html>