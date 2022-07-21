<?php 
session_start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'4wheeler');
$name=$_POST['fullname'];
$pass=$_POST['password'];
$email=$_POST['email'];
$query="SELECT * FROM users WHERE email='$email'";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);

if($num==1)
{  echo '<script> alert("Email already exists");';
   echo 'window.location.href="index.php";';
   echo  '</script>';
   
}
else
{
	$reg="INSERT INTO users(name,email,PASSWORD) values('$name','$email','$pass')";
	mysqli_query($con,$reg);
   echo '<script> alert("User registered successfully!!!");';
   echo 'window.location.href="index.php";';
   echo  '</script>';
}
?>
