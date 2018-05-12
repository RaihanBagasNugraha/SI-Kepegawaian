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

<form action="pegawai.php" method="post">   
 <select name="sort">  
 <option value="nomor">Sort By</option>  
 <option value="nama">Nama</option>  
 <option value="nip">NIP</option>    
 <option value="divisi">Divisi</option>  
 </select>   
 <input type="submit" name="enter" value="Enter">   
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
	}
	else if (isset($_POST['sort']))
	{
    $sort = $_POST['sort'];
	echo "Ordered By ".$sort."";
		$query = mysqli_query($koneksi,"select * from pegawai order by ".$sort."");
	}
	else{
		$query = mysqli_query($koneksi,"select * from pegawai order by nomor");		
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
	<a href=tambah_data.php>Tambah Data</a>
	<a href=index.php>Menu</a>
</body>
</html>
