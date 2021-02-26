<!DOCTYPE html>
<html>
<head>
	<title>New Surabaya</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<p style="margin-left: 10px;">
		<a href="index.php"> << Kembali ke halaman utama</a>
	</p>
	<?php 
		$ket = $_GET['keterangan'];

		if($ket == 'gagal_login') {
			echo '<h2 style="text-align: center">Gagal Login. Pastikan Anda mengetik username dan password dengan benar.</h2>';
		}
	?>
	<table class="styletable">
		<tr>
			<th>Sign In</th>
		</tr>
		<td>
			<form method="post" action="proseslogin.php">
				<label>Username</label>
				<br>
				<input type="textbox" id="username" name="username">
				<br>
				<label>Password</label>
				<br>
				<input type="textbox" id="password" name="password">
				<br>
				<input type="submit" name="submit" value="Submit">

				<p>
	            	<i>Belum punya akun? <a href="signup.php">Buat akun baru</a></i>
	          	</p>
			</form>
		</td>
	</table>
</body>
</html>