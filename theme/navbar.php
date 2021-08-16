<?php 
    // session_start();
    
    // if (!isset($_SESSION["login"])) {
    //   header("location:../login.php");
    //   exit;
    // }
    
    require 'proses/functions.php';
?>

<nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="img/logo(1).png" width="55" height="55" alt="" />
          Sistem Pendataan UMKM Kabupaten Maros
        </a>
      </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-light bg-navsecond">
      <div class="container">
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kategori.php">Kategori Tempat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tempat.php">Tempat/Lokasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pengguna.php">Penggunaan App</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pengaturan.php">Pengaturan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./logout.php">Keluar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>