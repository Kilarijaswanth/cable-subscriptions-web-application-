<?php 
$mail = $_POST['email'];
$password = $_POST['password'];



include 'connect.php';

$q = $con->prepare("SELECT email,password FROM register WHERE email = '$mail' AND password = '$password' ");
$q->execute();
$res = $q->rowCount();
if ($res) {
	echo "<script>alert('login successful');</script>";
	echo "<script>window.location='ddd.php';</script>";
}
else {
	echo "<script>alert('invalid user name or password');</script>";
	echo "<script>window.location='login.html';</script>";
}


 ?>
 