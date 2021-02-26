<?php
	include('koneksidb.php');

	$lok = explode(",", $_POST['lokasi'])[0];
	$lat = $_POST['lat'];
	$lng = $_POST['lng'];
	$masalah = $_POST['masalah'];
	$desk = $_POST['deskripsi'];
	$nama_foto = $_FILES['foto']['name'];

	$target_dir = "images/{$masalah}/";
	$target_file = $target_dir . basename($nama_foto);
	$uploadOk = 1;
	// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	// Check if image file is a actual image or fake image
	// if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["foto"]["tmp_name"]);
		if($check !== false) {
			// echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			header('Location: tambahdata.php?keterangan=bukan_gambar');
			$uploadOk = 0;
		}

		// Check file size
		if ($_FILES["foto"]["size"] > 5000000) { // MAX: 5 MB
			header('Location: tambahdata.php?keterangan=gambar_besar');
			$uploadOk = 0;
		}

		// Lanjutkan query jika tidak ada error waktu pengecekan foto
		if ($uploadOk == 1) {
			if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
				// echo "The file ". basename($foto). " has been uploaded.";
				$query = "INSERT INTO {$masalah}(alamat, x, y, deskripsi, foto) VALUES ('{$lok}', '{$lat}', '{$lng}', '{$desk}', '{$nama_foto}')";
				$result = mysqli_query($conn, $query);

				if($result) {
					header('Location: tambahdata.php?keterangan=sukses');
				}
				else {
					echo mysqli_error($conn);
					// header('Location: tambahdata.php?keterangan=gagal');
				}
			}
			else {
				header('Location: tambahdata.php?keterangan=gagal_upload_foto');
			}	
		}
	// }
?>