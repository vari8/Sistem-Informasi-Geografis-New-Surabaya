<?php
  session_start();
  include('koneksidb.php');

  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $query);

  $cekst = mysqli_num_rows($result);

  if ($cekst > 0) {
    $_SESSION['user'] = $username;
    header('Location: tambahdata.php');
  }
  else
  {
    header('Location: login.php?keterangan=gagal_login');
  }
?>
