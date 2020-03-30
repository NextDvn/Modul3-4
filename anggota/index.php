<?php
include '../aset/header.php';
include 'koneksi.php';

$sql = "SELECT * FROM anggota";

$res = mysqli_query($koneksi, $sql);

$pinjam = array();

while ($data = mysqli_fetch_assoc($res)) {
  $pinjam[] = $data;
}
?>
<style>
thead{
  background-color: turquoise;
  color: white;
}
tbody{
  background-color: darkslategrey;
  color: white;
}
</style>
<div class="container">
  <div class="row mt-4">
    <div class="col-md">
      <div class="card bg-dark">
        <div class="card-header">
          <h2 class="card-title text-white"><i class="fas fa-edit"></i>Data Anggota</h2>
        </div>
        <div class="card-body">
          <table class="table table-striped ">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($pinjam as $p ) { ?>
                <tr>
                  <th scope="row"><?= $no ?></th>
                  <td><?= $p['nama'] ?></th>
                    <td><?= $p['kelas'] ?></td>
                    <td>
                      <a href="#" class="badge badge-primary">Detail</a>
                      <a href="#" class="badge badge-success">Edit</a>
                      <a href="#" class="badge badge-danger">Hapus</a>
                    </td>
                  </tr>
                  <?php
                  $no++;
                }
                ?>
              </tbody>
            </table>
            <a href="http://localhost/siperpus/anggota/tambah.php" class="btn btn-secondary">Tambah</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  include '../aset/footer.php';
  ?>
