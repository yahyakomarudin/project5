
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-6">
          <div class="box">
            <div class="box-header text-center">
              <h3>TAMBAH DATA PRODUK</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table">
                <form action="" method="POST">
                  <tr>
                    <td>
                      <label>Nama</label>
                      <input type="text" name="nama" class="form-control" required="" placeholder="Nama produk ..."  autocomplete="off">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label>Harga</label>
                      <input type="number" name="harga" class="form-control" required="" placeholder="Harga produk ..." autocomplete="off">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label>Deskripsi</label>
                      <textarea rows="5" name="deskripsi" class="form-control" required="" placeholder="Deskripsi produk ..." autocomplete="off"></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td align="right">
                     <button type="submit" name="simpan" class="btn btn-success btn-sm">SIMPAN</button>
                    </td>
                  </tr>
                </form>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

<?php 


if (isset($_POST['simpan'])) {
  

$nama = $_POST['nama'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];


$cek = mysqli_query($koneksi, "SELECT * FROM produk WHERE nama='$nama'");
$ada = mysqli_num_rows($cek);
if ($ada == 1) {
    echo "<script>alert('maaf nama produk sudah ada')</script>";
      echo "<meta http-equiv='refresh' content='0; url=?page=produk/tambah'></script>";
  }else{
    $input = mysqli_query($koneksi, "INSERT INTO produk VALUES (NULL, '$nama', '$harga', '$deskripsi');");

    if ($input) {
      echo "<script>alert('Sukses')</script>";
      echo "<meta http-equiv='refresh' content='0; url=?page=produk/index'></script>";
    }else{
      echo "<script>alert('Terjadi kesalahan, coba ulangi kembali !')</script>";
      echo "<meta http-equiv='refresh' content='0; url=?page=produk/tambah'></script>";
    }
  }



}



 ?>