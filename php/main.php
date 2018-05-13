<?php
include "koneksi.php";
?>
<html>
<head>
<link rel="stylesheet" href="style2.css">
<link rel="stylesheet" href="style2.css">
<style type="text/css">
	#header{
	width:100%;
	height:75px;
	background:#FFB300;
	}
	.title{
	color:white; 
	font-family:helvetica;
	font-weight:bold; 
	text-decoration:none; 
	font-size:30px; 
	line-height:60px; 
	padding:20px;
	}
	body {
			background: url('office2.jpg');
			color: #fff;
			background-size: 1200px 720px;
	}
	th{
		color:black;
	}
	td{
		color:black;
	}
	tr{
		color:black;
	}
</style>
<title>Data Pegawai</title>
</head>
<body>
<div id="header">
	<a href="" class="title">Data Pegawai Ars Corporation</a>
</div>

<!--<p>Form Search</p> -->
<form action="main.php" method="get" class="cari">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
	
	
</form>

<form action="main.php" method="post" class="sort2">   
 <select name="sort">  
 <option value="nomor">Sort By</option>  
 <option value="nama">Nama</option>  
 <option value="nip">NIP</option>    
 <option value="divisi">Divisi</option>  
 </select>   
 <input type="submit" name="enter" value="Enter">   
</form> 
<a href="login.php"><button class="btn2">Login</button></a></br>
<!--<p>Table Pegawai</p> -->
<table border = "1">
	<tr>
	 <th>Nama</th>
	 <th>NIP</th>
	 <th>Tanggal Lahir</th>
	 <th>Divisi</th>
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
	</tr>
	<?php
	}
	?>
</table>
</body>
</html>
