<?php
include "koneksi.php";
session_start();

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($koneksi, 
"SELECT * FROM user WHERE password='$password' AND username='$username'");

$rows = mysqli_num_rows($query);
if($rows == 1){
	$_SESSION['username'] = $username;
	header("location:index.php");
}
else{
	echo "Username atau Password salah <br>";
	echo "<a href=login.php>Login</a>";
}
?>