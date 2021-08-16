<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/kostum.css">
</head>

<body>
    <!-- Navbar-->
    <?php
        include 'theme/navbar.php';
        ?>
    <!-- endnavbar -->
    <div class="container">
        <h2 class="pt-5">Manajemen Tempat Lokasi</h2>
        <div class="row justify-content-end pb-5">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalCenter">+ Tambah
                Tempat</button>
        </div>
        <table class="table table-striped table-hover pt-5">
            <thead>
                <tr>
                    <th scope="col" style="width: 20px;">No.</th>
                    <th scope="col" style="width: 20rem;">Kategori</th>
                    <th scope="col">Nama Tempat</th>
                    <th scope="col" style="width: 15rem;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Pedagang Asongan</td>
                    <td>Otto</td>
                    <td>
                        <button class="btn btn-success px-4 mr-2" data-toggle="modal"
                            data-target="#exampleModalCenter">Edit</button>
                        <button class="btn btn-danger px-3" data-toggle="modal" data-target="#exampleModal">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>
                        <button class="btn btn-success px-4 mr-2" data-toggle="modal"
                            data-target="#exampleModalCenter">Edit</button>
                        <button class="btn btn-danger px-3"data-toggle="modal" data-target="#exampleModal">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>
                        <button class="btn btn-success px-4 mr-2" data-toggle="modal"
                            data-target="#exampleModalCenter">Edit</button>
                        <button class="btn btn-danger px-3" data-toggle="modal" data-target="#exampleModal">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>


    </div>

    <!-- ModalTambahData -->
    <?php
        include 'data/tambahLokasi.php';
    ?>
    <!-- EndModalTambahData -->

    <!-- modalEditData -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Edit Tempat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Pilih Kategori</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama tempat/lokasi</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Deskripsi</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Alamat lengkap</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Hp/Kontak</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Website</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Latitude</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Longitude</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example">
                            <small>Dapatkan Lokasi Latitude dan Longitude</small><br>
                            <a href=""><button type="button" class="btn btn-success btn-sm">Di Sini!</button></a>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Link Youtube/Video</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Gambar utama</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Gambar galeri</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <!-- endModalEdit -->

    <!-- modalHapus -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    Anda Yakin Ingin Menghapusnya ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </div>
            </div>
        </div>
    </div>
    <!-- EndHapus -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>