<?php 
    // session_start();
    // if(!isset($_SESSION["login"])){
    //     header("location: login.php");
    //     exit;
    // }
    require 'functions.php';
    $id = $_GET["id"];

    if(hapusKategori($id) > 0){
        echo"
        <script>
            alert('data berhasil hapus');
            document.location.href = '../kategori.php'
        </script>
        ";
    }else{
        echo "
        <script>
            alert('data gagal dihapus');
            document.location.href = '../kategori.php'
        </script>
        ";
    }
?>