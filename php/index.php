<?php
include "koneksi.php";
session_start();
if(!isset($_SESSION['username'])){
	header("location:login.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="style.css">
<style type="text/css">
		body {
			background: url('office.jpg');
			color: #fff;
			background-size: 1200px 720px;
		}
		h1{
			color:black;
		}
		h2{
			color:black;
		}
		.tambah{
  font-size: 20px;
  width: 250px;
  padding: 20px 15px;
  margin: 100px auto;
  margin-left: 550px;
  margin-bottom: -100px;
  border-radius: 5px;
  background: #FFB300;
}
.edit{
  font-size: 20px;
  width: 250px;
  padding: 20px 15px;
  margin: 50px auto;
  margin-left: 550px;
  margin-bottom: -100px;
  border-radius: 5px;
  background: #FFB300;
}
.out{
  font-size: 20px;
  width: 250px;
  padding: 20px 15px;
  margin: 50px auto;
  margin-left: 550px;
  border-radius: 5px;
  background: #FFB300;
}
</style>
<title>Index</title>

</head>
	<body>
		<h1>Welcome Admin</h1>
		<br>
		<a href="tambah_data.php"><button class="tambah">Tambah Data Pegawai</button></a></br>
		<a href="pegawai.php"><button type="button" class="edit">Edit Data Pegawai</button></a></br>
		<a href="logout.php"><button type="button" class="out">Logout</button></a><br>
		<br>
		<h2><marquee scrollamount="10">Selamat Datang di Sistem Kepegawaian Ars Corporation.Co.Ltd</marquee></h2>
	</body>
</html>
