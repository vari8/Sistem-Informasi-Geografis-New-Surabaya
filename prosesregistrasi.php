
<?php
	include('koneksidb.php');

	$username = $_POST['username'];
	$password = $_POST['password'];
	$retype_password = $_POST['retype_password'];
	$name = $_POST['name'];
	$nik = $_POST['nik'];
	$email = $_POST['email'];
	$nohp = $_POST['nohp'];

	if($password == $retype_password) {
		$query = "INSERT INTO user VALUES ('$username', '$password', '$name', '$nik', '$email', '$nohp')";
		$result = mysqli_query($conn, $query);

		if($result) {
			header('Location: tambahdata.php');
		}
		else {				
			// mysqli_error($conn);
			header('Location: signup.php?keterangan=gagal_signup');
		}
	}
	else {
		header('Location: signup.php?keterangan=retype_password_salah');
	}
?>