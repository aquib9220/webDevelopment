<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'loginExample');
$q="SELECT * FROM signup WHERE '$username'=username and '$password'=password";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
	$_SESSION['username']=$username;
	header("location:http://localhost/practice1/login Example/web.php");

}
else
{
	header("location:http://localhost/practice/login Example/login.php");

}
mysqli_close($con);
?>