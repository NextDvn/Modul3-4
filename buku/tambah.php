<?php
include '../aset/header.php';
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card bg-dark">
                <div class="card-header">
                  <h2 class="card-title text-white"><i class="fas fa-edit"></i>Tambahkan Data Buku</h2>
                </div>
                <div class="card-body">
                  <form method="post" action="proses-tambah.php">
                      <div class="form-group text-white">
                          <label for="judul">Judul</label>
                          <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul">
                      </div>
                      <div class="form-group text-white">
                          <label for="penerbit">Penerbit</label>
                          <input type="text" class="form-control" name="penerbit" id="penerbit" placeholder="Masukkan Penerbit">
                      </div>
                      <div class="form-group text-white">
                          <label for="pengarang">Pengarang</label>
                          <input type="text" class="form-control" name="pengarang" id="pengarang" placeholder="Masukkan Pengarang">
                        </div>
                      <div class="form-group text-white">
                          <label for="ringkasan">Ringkasan</label>
                          <input type="text" class="form-control" name="ringkasan" id="ringkasan" placeholder="Masukkan Ringkasan">
                      </div>
                      <div class="form-group text-white">
                          <label for="cover">Cover</label>
                          <input type="text" class="form-control" name="cover" id="cover" placeholder="Masukkan Cover">
                      </div>
                      <div class="form-group text-white">
                          <label for="stok">Stock</label>
                          <input type="text" class="form-control" name="stok" id="stok" placeholder="Masukkan Stock">
                      </div>
                      <div class="form-group text-white">
                          <label for="id_kategori">Kategori</label>
                          <input type="text" class="form-control" name="id_kategori" id="id_kategori" placeholder="Masukkan Kategori">
                          <small class="form-text text-muted">Pilih angka "1" atau "2"</small>
                      </div>

                      <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include '../aset/footer.php';
?>
