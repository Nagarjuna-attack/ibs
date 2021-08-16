<?php 
    require 'functions.php';
    //cek apakah tombol submit sudah ditekan atau belum
    if( isset($_POST["submit"]) ) {
        
        // var_dump($_POST); 
        // var_dump($_FILES);
        // die;
        
        //cek apakah data berhasil ditambahkan atau tidak
        if ( tambahKategori($_POST) > 0 ){
            echo "
                <script>
                    alert('data berhasil ditambahkan');
                    document.location.href = '../kategori.php';
                </script>
            ";
        }else{
            echo "
            <script>
                alert('data gagal ditambahkan');
                document.location.href = 'index.php'
            </script>";
        }
    }
?>
