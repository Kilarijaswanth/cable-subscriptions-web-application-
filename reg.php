<?php 
$name = $_POST['name'];
$mail = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];



include 'connect.php';
if ($password == $confirm) {
$q = $con->prepare("INSERT INTO register(name,email,password,confirm) VALUES('$name','$mail','$password','$confirm')");
$res = $q->execute();
if ($res) {
	echo "<script>alert('successful');</script>";
	echo "<script>window.location='login.html';</script>";
}
}
else {
	echo "<script>alert('password unmatch');</script>";
	echo "<script>window.location='reg.html';</script>";
}

 ?>