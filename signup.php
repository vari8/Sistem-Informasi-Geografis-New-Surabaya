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

		if($ket == 'gagal_signup') {
			echo '<h2 style="text-align: center">Gagal Sign Up. Pastikan Anda mengisikan data dengan benar.</h2>';
		}
		if($ket == 'retype_password_salah') {
			echo '<h2 style="text-align: center">Pastikan Anda mengulang password dengan benar.</h2>';
		}
	?>
	<table class="styletable">
		<tr>
			<th>Sign Up</th>
		</tr>
		<td>
			<form method="post" action="prosesregistrasi.php">
				<label>Username</label>
				<br>
				<input type="textbox" id="username" name="username">
				<br>
				<label>Password</label>
				<br>
				<input type="textbox" id="password" name="password">
				<br>
				<label>Retype Password</label>
				<br>
				<input type="textbox" id="retype_password" name="retype_password">
				<br>
				<label>Nama</label><br>
				<input type="textbox" id="name" name="name" placeholder="Isi Dengan Nama Pelapor">
				<br>
	          
	          	<label>E-Mail</label>
				<br>
				<input type="email" id="email" name="email" placeholder="you@email.com">
	          	<br><br>
				<label>Nomor Induk Kependudukan</label>
				<br>
				<input type="textbox" id="nik" name="nik">
				<br>
				
				<br>
				<label>No. Handphone</label>
				<br>
				<input type="textbox" id="nohp" name="nohp">
				<br>
				<br>
				<input type="submit" name="submit" value="Submit">

			</form>
		</td>
	</table>
</body>
</html>