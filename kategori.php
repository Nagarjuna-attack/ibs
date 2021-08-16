
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kategori</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/kostum.css" />
  </head>

  <body>
    <!-- Navbar-->
    <?php
        include 'theme/navbar.php';
    ?>
    <!-- endnavbar -->

    <?php $data = query("SELECT * FROM tbl_kategori "); ?>
    
      
    

    <!-- Card Kategori -->
    <div class="container">
      <h2 class="pt-5">Kategori Tempat</h2>
      <div class="row justify-content-end">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalCenter">+ Tambah Kategori</button>
      </div>
    </div>
  
    <div class="container">
      <div class="row pt-5">
      <?php foreach ($data as $value) : ?>
        <div class="col-3 mb-3">
          <div class="card" style="width: 16rem">
            <div class="card-body">
              <h5 class="card-title"><?= $value["nama_kategori"]; ?> (1)</h5>
              <div class="row justify-content-center">
                <button class="btn btn-success px-4 mr-2" data-toggle="modal" data-target="#exampleModalCenter">Edit</button>
                <button class="btn btn-danger px-3" data-toggle="modal" data-target="#exampleModal">Hapus</button>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach ; ?>
    </div>
   
    <!-- end Kategori -->

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
              <div class="form-group">
                <label for="formGroupExampleInput">Nama kategori</label>
                <input type="text" name="nama" class="form-control" id="formGroupExampleInput" placeholder="Example input" />
              </div>
              <div class="form-group">
                <label for="exampleFormControlFile1">Gambar kategori</label>
                <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1" />
              </div>
              <img src="img/logo(1).png" width="75" height="75" />
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>
    <!-- EndModalEdit -->

    <!-- modal tambah data -->
    <?php
        include 'data/tambahKategori.php';
    ?>
    <!-- end modal tambah data -->

    <!-- modalHapus -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">Anda Yakin Ingin Menghapus <?= $value['nama_kategori']?> ?</div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-danger"><a href="proses/hapus.php?id=<?= $value["id_kategori"]?>" style="color: white">Hapus</a></button>
          </div>
        </div>
      </div>
    </div>
    <!-- endModalHapus -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
