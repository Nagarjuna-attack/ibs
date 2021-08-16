<!-- ModalTambahData -->
<div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Tempat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="./proses/tambahLokasi.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Pilih Kategori</label>
                            <select class="form-control" name="idKategori" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama tempat/lokasi</label>
                            <input type="text" name="namaLokasi" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Alamat lengkap</label>
                            <input type="text" name="alamatLengkap" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email</label>
                            <input type="text" name="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Hp/Kontak</label>
                            <input type="text" name="nohp" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Website</label>
                            <input type="text" name="website" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Latitude</label>
                            <input type="text" name="latitude" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Longitude</label>
                            <input type="text" name="longtitude" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example">
                            <small>Dapatkan Lokasi Latitude dan Longitude</small><br>
                            <a href=""><button type="button" class="btn btn-success btn-sm">Di Sini!</button></a>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Link Youtube/Video</label>
                            <input type="text" name="linkyoutube" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Gambar utama</label>
                            <input type="file" name="gambarUtama" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Gambar galeri</label>
                            <input type="file" name="gambarGaleri" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <!-- EndModalTambahData -->