<?php
session_start();
if(!isset($_SESSION['username']))
{
	header("location:http://localhost/practice/login Example/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<link rel="stylesheet" type="text/css" href="home.css">

</head>
<body>

<div class="header">
  <h1>My Website</h1>
  <p>A website created by me.</p>
</div>

<div class="navbar">
  <a href="http://www.google.com">Google</a>
  <a href="http://www.imsec.ac.in">IMSEC</a>
  <a href="http://www.irctc.ac.in">IRCTC</a>
  <a href="http://localhost/practice/login Example/logout.php" class="right">Logout</a>
</div>
<div class="footer">
  <h2>Footer</h2>
  &copy 2006
</div>

</body>
</html>
