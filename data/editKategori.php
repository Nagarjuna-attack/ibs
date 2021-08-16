<?php
    // session_start();
    // if(!isset($_SESSION["login"])){
    //     header("location: login.php");
    //     exit;
    // }
    $id = $_GET["id"];
    //query data berdasarkan data mahasiswa
    $animal = query("SELECT * FROM tbl_kategori WHERE id = $id")[0];
    //cek apakah tombol submit sudah ditekan atau belum
    if( isset($_POST["submit"]) ) {
        //cek apakah data berhasil diubah atau tidak
        if ( ubahKategori($_POST) > 0 ){
            echo "
                <script>
                    alert('data berhasil diubah');
                    document.location.href = 'index.php'
                </script>
            ";
        }else{
            echo "
            <script>
                alert('data gagal diubah');
                document.location.href = 'index.php'
            </script>";
        }
    }
?>
<!-- ModalEdit -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Edit Kategori</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" <?= $animal["id"]; ?>>
                <input type="hidden" name="gambarLama" <?= $animal["gambar"]; ?> id="">
              <div class="form-group">
                <label for="formGroupExampleInput">Nama kategori</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="nama" placeholder="Example input" required value="<?= $animal["nama_kategori"]; ?>" />
              </div>
              <div class="form-group">
                <label for="exampleFormControlFile1">Gambar kategori</label>
                <input type="file" class="form-control-file" name="gambar" id="exampleFormControlFile1" />
              </div>
              <img src="img/kategori/<?= $animal["gambar"]; ?>" width="75" height="75" />
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" name="submit" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>
    <!-- EndModalEdit -->