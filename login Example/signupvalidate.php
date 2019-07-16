<?php
$username=$_POST['username'];
$password=$_POST['password'];
$name=$_POST['name'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$qualification=$_POST['qualification'];

$con=mysqli_connect('localhost','root');
if(!$con)
{
	echo "not connected to the database";
}
else
{
	echo "Connected"."<br>";
}
mysqli_select_db($con,'loginExample');
$q="INSERT INTO signup (username,password,name,fname,mname,mobile,email,qualification) values ('$username','$password','$name','$fname','$mname',$mobile,'$qualification')";
$status=mysqli_query($con,$q);
if($status==1)
{
	echo "Inserted";
}
else
{
	echo "not inserted";
}
?>