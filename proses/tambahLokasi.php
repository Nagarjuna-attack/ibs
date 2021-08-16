<?php 
    // session_start();
    // if(!isset($_SESSION["login"])){
    //     header("location: login.php");
    //     exit;
    // }
    require 'functions.php';
    //cek apakah tombol submit sudah ditekan atau belum
    if( isset($_POST["submit"]) ) {
        
        var_dump($_POST); 
        var_dump($_FILES);
        exit;
        
        // cek apakah data berhasil ditambahkan atau tidak
        if ( tambahLokasi($_POST) > 0 ){
            echo "
                <script>
                    alert('data berhasil ditambahkan');
                    document.location.href = '../tempat.php'
                </script>
            ";
        }else{
            echo "
            <script>
                alert('data gagal ditambahkan');
                document.location.href = '../tempat.php'
            </script>";
        }
    }
?>