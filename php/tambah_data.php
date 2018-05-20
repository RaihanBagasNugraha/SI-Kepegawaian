<html>
<body>
<head>
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
.menu{
  display: block;
  font-size: 20px;
  margin-top:5px;
  background: #f2f2f2;
  width: 300px;
  padding: 30px 30px;
  margin: 50px auto;
  border-radius: 5px;
}
</style>
	<title>Tambah Data</title>
	<link rel="stylesheet" href="style.css">
</head>
	<h1>Tambah Data Pegawai<h1>
	<form action="proses_input.php" method="post">
		<input type="text" name="nama" placeholder="NAMA"><br>
		<input type="text" name="nip" placeholder="NIP"><br>
		<input type="text" name="tgl_lahir" placeholder="Tanggal Lahir"><br>
		<input type="text" name="divisi" placeholder="DIVISI"><br>
		<input type="submit" value="Submit">
	</form>
	<a href="index.php"><button class="menu">Menu</button></a></br>
</body>
</html>
