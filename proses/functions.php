<?php 
    //koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "db_lbs");
    if (!$conn)
      die("tidak terkoneksi" . mysqli_connect_error($conn));

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function allKategori(){
        global $conn;

        $result = mysqli_query($conn,"SELECT * FROM tbl_kategori ORDER BY nama_kategori ASC");
        $rows = mysqli_fetch_array($result);
        return $rows;
    }

    function tambahKategori($data){
      global $conn;
      $nama = htmlspecialchars($data["namaKategori"]);

      //upload gambar
      $gambar = uploadKategori();
      if (!$gambar){
          return false;
      }

      $query = "INSERT INTO tbl_kategori
                  VALUES
                  ('', '$nama','$gambar')
                  ";
      mysqli_query($conn, $query);

      return mysqli_affected_rows($conn);
    }
    function uploadKategori(){
    $namaFile = $_FILES['gambarKategori']['name'];
    $ukuranFile = $_FILES['gambarKategori']['size'];
    $error = $_FILES['gambarKategori']['error'];
    $tmpName = $_FILES['gambarKategori']['tmp_name'];

    // cek apakah tidak ada gambar yg diupload
    if ($error === 4){
        echo "<script>
                alert('pilih gambar terlebih dahulu');
             </script>";
            return false;
     }

    //cek apakah yg diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar)); //strtolower : memaksa ekstensi gambar jadi huruf kecil
    
    if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>
                    alert('yang anda upload bukan gambar');
            </script>";
        return false;
    }
    // jika ukurannya terlalu besar
    if($ukuranFile > 1000000){
        echo "<script>
            alert('ukuran gambar terlalu besar');
        </script>";
        return false;
    }
    //lolos penecekan, gambar siap diupload
    //generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    // var_dump($namaFileBaru); die;



    move_uploaded_file($tmpName, '../img/kategori/' . $namaFileBaru);

    return $namaFileBaru;
    }

 function ubahKategori($data){
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);
    //cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] == 4){
        $gambar = $gambarLama;
    }else{

        $gambar = uploadKategori();
    }
    
    

    
    $query = "UPDATE tbl_kategori SET 
                nama = '$nama',
                gambar = '$gambar' WHERE id=$id
                 ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
    }
    function hapusKategori($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM tbl_kategori WHERE id_kategori = $id");
        return mysqli_affected_rows($conn);

    }
// =================================================================================================
    function tambahLokasi($data){
        global $conn;
        $namaTempat = htmlspecialchars($data["namaTempat"]);
        $deskripsi = htmlspecialchars($data["deskripsi"]);
        $alamatLengkap = htmlspecialchars($data["alamatLengkap"]);
        $email = htmlspecialchars($data["email"]);
        $nohp = htmlspecialchars($data["nohp"]);
        $website = htmlspecialchars($data["website"]);
        $latitude = htmlspecialchars($data["latitude"]);
        $longtitude = htmlspecialchars($data["longtitude"]);
        $linkyoutube = htmlspecialchars($data["linkyoutube"]);
        $gambarUtama = htmlspecialchars($data["gambarUtama"]);
        $gambarGaleri = htmlspecialchars($data["gambarGaleri"]);


        //upload gambar
        $gambarUtama = uploadLokasiUtama();
        if (!$gambarUtama){
            return false;
        }
        $gambarGaleri = uploadLokasiGaleri();
        if (!$gambarGaleri){
            return false;
        }


        $query = "INSERT INTO tbl_lokasi
                    VALUES
                    (NULL, '', '$namaTempat','$deskripsi', '$alamatLengkap', '$email', '$nohp', '$website', '$latitude', '$longtitude', '$linkyoutube', '$gambarUtama', '$gambarGaleri')
                    ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
    function uploadLokasiUtama(){
        $namaFile = $_FILES['gambarUtama']['name'];
        $ukuranFile = $_FILES['gambarUtama']['size'];
        $error = $_FILES['gambarUtama']['error'];
        $tmpName = $_FILES['gambarUtama']['tmp_name'];
    
        // cek apakah tidak ada gambar yg diupload
        if ($error === 4){
            echo "<script>
                    alert('pilih gambar terlebih dahulu');
                 </script>";
                return false;
         }
    
        //cek apakah yg diupload adalah gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar)); //strtolower : memaksa ekstensi gambar jadi huruf kecil
        
        if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
            echo "<script>
                        alert('yang anda upload bukan gambar');
                </script>";
            return false;
        }
        // jika ukurannya terlalu besar
        if($ukuranFile > 1000000){
            echo "<script>
                alert('ukuran gambar terlalu besar');
            </script>";
            return false;
        }
        //lolos penecekan, gambar siap diupload
        //generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        // var_dump($namaFileBaru); die;
    
    
    
        move_uploaded_file($tmpName, '../img/lokasiutama/' . $namaFileBaru);
    
        return $namaFileBaru;
        }
        function uploadLokasiGaleri(){
            $namaFile = $_FILES['gambarGaleri']['name'];
            $ukuranFile = $_FILES['gambarGaleri']['size'];
            $error = $_FILES['gambarGaleri']['error'];
            $tmpName = $_FILES['gambarGaleri']['tmp_name'];
        
            // cek apakah tidak ada gambar yg diupload
            if ($error === 4){
                echo "<script>
                        alert('pilih gambar terlebih dahulu');
                     </script>";
                    return false;
             }
        
            //cek apakah yg diupload adalah gambar
            $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
            $ekstensiGambar = explode('.', $namaFile);
            $ekstensiGambar = strtolower(end($ekstensiGambar)); //strtolower : memaksa ekstensi gambar jadi huruf kecil
            
            if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
                echo "<script>
                            alert('yang anda upload bukan gambar');
                    </script>";
                return false;
            }
            // jika ukurannya terlalu besar
            if($ukuranFile > 1000000){
                echo "<script>
                    alert('ukuran gambar terlalu besar');
                </script>";
                return false;
            }
            //lolos penecekan, gambar siap diupload
            //generate nama gambar baru
            $namaFileBaru = uniqid();
            $namaFileBaru .= '.';
            $namaFileBaru .= $ekstensiGambar;
            // var_dump($namaFileBaru); die;
        
        
        
            move_uploaded_file($tmpName, '../img/lokasigaleri/' . $namaFileBaru);
        
            return $namaFileBaru;
            }
    

