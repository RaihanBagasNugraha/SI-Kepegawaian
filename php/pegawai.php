<?php
include "koneksi.php";
?>
<html>
<body>
<!--<p>Form Search</p> -->
<form action="pegawai.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
<!--<p>Table Pegawai</p> -->
<table border = "1">
	<tr>
	 <th>Nama</th>
	 <th>NIP</th>
	 <th>Tanggal Lahir</th>
	 <th>Divisi</th>
	 <th>Edit</th>
	 <th>Delete</th>
	<?php 
	// Search function
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$query = mysqli_query($koneksi,"select * from pegawai where nama like '%".$cari."%' OR nip like '%".$cari."%'
		OR tgl_lahir like '%".$cari."%' OR divisi like '%".$cari."%'");				
	}else{
		$query = mysqli_query($koneksi,"select * from pegawai");		
	}
	$no = 1;
	while($data = mysqli_fetch_array($query)){
	?>
	<tr>
	 <td><?php echo $data['nama']?></td>
	 <td><?php echo $data['nip']?></td>
	 <td><?php echo $data['tgl_lahir']?></td>
	 <td><?php echo $data['divisi']?></td>
	 <td><a href="edit.php?nomor=<?php echo $data['nomor'];?>">Edit</a></td>
	 <td><a href="delete.php?nomor=<?php echo $data['nomor'];?>">Delete</a></td>
	</tr>
	<?php
	}
	?>
</table>
</body>
</html>
