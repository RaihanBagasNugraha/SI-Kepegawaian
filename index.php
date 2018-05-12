<?php
include "koneksi.php";
session_start();
if(!isset($_SESSION['username'])){
	header("location:login.php");
}
?>
<!DOCTYPE HTML>
<html>
		<h1>Welcome
		<link rel="stylesheet" href="style.css">
		<?php echo $_SESSION['username'];?>
		</h1>
		<br>
		<button type="button" class="tambah"><a href="tambah_data.php">Tambah Data Pegawai</a></button>
		<button type="button" class="edit"><a href="pegawai.php">Edit Data Pegawai</a></button>
		<button type="button" class="out"><a href="logout.php">Logout</a></button>
	</body>
</html>
