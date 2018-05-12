<?php
include "koneksi.php";
session_start();
if(!isset($_SESSION['username'])){
	header("location:login.php");
}
?>
<!DOCTYPE HTML>
<html>
<title>Index</title>
		<link rel="stylesheet" href="style.css">
		<h1>Welcome Admin</h1>
		<br>
		<a href="tambah_data.php"><button class="tambah">Tambah Data Pegawai</button></a></br>
		<a href="pegawai.php"><button type="button" class="edit">Edit Data Pegawai</button></a></br>
		<a href="logout.php"><button type="button" class="out">Logout</button></a>
	</body>
</html>
