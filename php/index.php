<?php
include "koneksi.php";
session_start();
if(!isset($_SESSION['username'])){
	header("location:login.php");
}
?>
<!DOCTYPE HTML>
<html>
	<body>
		Welcome
		<?php echo $_SESSION['username'];?>
		<br>
		<a href="tambah_data.php">Tambah Data Pegawai</a><br>
		<a href="pegawai.php">Edit Data Pegawai</a><br>
		<a href="logout.php">Logout</a>
	</body>
</html>
