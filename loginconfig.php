<?php 
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'4wheeler');
$email=$_POST['email'];
$pass=$_POST['password'];
$query="SELECT * FROM users WHERE email='$email' AND PASSWORD='$pass';";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
if($num==0){
	$_SESSION['email']=1;
	echo "<script> alert('Invalid email id or password!Please try again.');";
	echo "window.location.href='login.php';";
	echo "</script>";    
}
else
{
	echo '<script> alert("Login successfull!!");';
	echo 'window.location.href="index.php";';
    echo '</script>';
}
?>