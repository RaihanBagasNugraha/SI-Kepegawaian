<!DOCTYPE HTML>
<html>
	<head>
		<title>LOGIN sistem Kepegawaian</title>
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
		</style>
	</head>
	<body>
		<h1>Sistem Kepegawaian Ars Corp</h1>
		<br>
		<form action="proses_login.php" method="post">
			<h2>LOGIN</h2>
			<input type="text" name="username" placeholder="username"/><br>
			<input type="password" name="password" placeholder="password"/><br>
			<input class="submit"type="submit" name="login">
		</form>
	</body>
</html>
