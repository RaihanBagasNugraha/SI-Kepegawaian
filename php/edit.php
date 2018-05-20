<?php
include "koneksi.php";
$nomor = $_GET['nomor'];
$query = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE nomor = '$nomor'");
$data=mysqli_fetch_assoc($query);
?>
<html>
<head>
<title>Edit Data Pegawai</title>
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
			color:white;
		}
		input{
  text-align: center;
  display: block;
  width: 100%;
  padding: 20px 20px;
  box-sizing: border-box;
  border-radius: 15px;
}
</style>
</head>
<body>
	<h1>Edit Data Pegawai</h1>
	<form action="proses_edit.php" method="post">
		<input value="<?=$data['nomor'];?>"type="hidden" name="nomor"><br>
		<input value="<?=$data['nama'];?>"type="text" name="nama"><br>
		<input value="<?=$data['nip'];?>"type="text" name="nip"><br>
		<input value="<?=$data['tgl_lahir'];?>"type="text" name="tgl_lahir"><br>
		<input value="<?=$data['divisi'];?>"type="text" name="divisi"><br>
		<input type = "submit" value="update">
	</form>
</body>
</html>
