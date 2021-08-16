<!-- ModalTambahData -->
<div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Kategori</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="./proses/tambahKategori.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="formGroupExampleInput">Nama kategori</label>
                <input type="text" class="form-control" name="namaKategori" id="formGroupExampleInput" placeholder="Example input" />
              </div>
              <div class="form-group">
                <label for="exampleFormControlFile1">Gambar kategori</label>
                <input type="file" class="form-control-file" name="gambarKategori" id="exampleFormControlFile1" />
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