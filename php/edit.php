<?php
include "koneksi.php";
$nomor = $_GET['nomor'];
$query = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE nomor = '$nomor'");
$data=mysqli_fetch_assoc($query);
?>
<html>
<body>
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
