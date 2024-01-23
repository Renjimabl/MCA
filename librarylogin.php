<html>
<head>
<title>Library</title>
<style>
body
{
	background-image:url('l.jpg');
	background-repeat:no-repeat;
	background-position:center;
	background-size:cover;
}
h1
{
	color:White;
	text-align:center;
	background-color:Chocolate;
}
form
{
	padding-left:25%;
}
label
{
	background-color:FloralWhite;
}
</style>
</head>
<body>
<?php
if(isset($_POST['sub']))
{
	$username=$_POST['txt1'];
	$password=$_POST['pd'];
	if($username=="Admin" AND $password=="pwd")
	{
		header('Location:homepage.html');
	}
	else
	{
		header('Location:fail.html');
	}
}
?>
<center>
<h1><b><big>Library Management System</big></b></h1>

<form method="POST">
	<label for="un"><b>Username:</b></label>
	<input type="text" name="txt1" id="un"><br><br>

	<label for="pwd"><b>Password:</b></label>
	<input type="password" name="pd" id="pwd"><br><br>

	<input type="submit" name="sub" id="sub" value="Log in">
</form>
</center>
</body>
</html>