<?php
session_start();
include 'proses/functions.php';
if (isset($_POST['login'])) {
    $nama = $_POST['nama'];
    $password = $_POST['password'];

    $query_cek_user = mysqli_query($conn, "SELECT * FROM admin WHERE nama='$nama' AND password='$password' ");
    $count = mysqli_num_rows($query_cek_user);
    $data_user = mysqli_fetch_array($query_cek_user);

    if ($count > 0) {
        //pendeklarasian variable SESSION
        $_SESSION['nama'] = $data_user['nama'];
        $_SESSION['password'] = $data_user['password'];
        header("location: ./index.php");
    } else {
        echo "<script>alert('Cek kembali data yang dimasukkan!')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/kostum.css" />
  </head>

  <body class="login">
    <section class="jarakLogin">
      <div class="row text-center pt-5">
        <div class="col">
          <img src="img/logo(1).png" alt="" height="90" width="90" />
        </div>
      </div>
      <div class="row justify-content-center text-center pt-3">
        <div class="col-4">
          <h4 class="loginSelamat">Selamat Datang Di Sistem Pendataan UMKM Kabupaten Maros</h4>
        </div>
      </div>
      <div class="row justify-content-center pt-4">
        <div class="col-3">
          <form method="POST" action="">
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="name" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pengguna" />
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Kata Sandi</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" />
            </div>
            <button type="submit" name="login" class="btn btn-success btn-block tombolLogin">Login</button>
          </form>
        </div>
      </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
