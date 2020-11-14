<?php 
	$mysql = mysqli_query($koneksi, "SELECT * FROM produk WHERE id='$_GET[id]'");
	$data = mysqli_fetch_array($mysql);
?>


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-6">
          <div class="box">
            <div class="box-header text-center">
              <h3>EDIT DATA PRODUK</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table">
                <form action="" method="POST">
                	<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                  <tr>
                    <td>
                      <label>Nama</label>
                      <input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control" required="" placeholder="Nama produk ..."  autocomplete="off">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label>Harga</label>
                      <input type="number" name="harga" value="<?php echo $data['harga'] ?>" class="form-control" required="" placeholder="Harga produk ..." autocomplete="off">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label>Deskripsi</label>
                      <textarea rows="5" name="deskripsi" class="form-control" required="" placeholder="Deskripsi produk ..." autocomplete="off"><?php echo $data['deskripsi'] ?></textarea>
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
  
$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];



    $input = mysqli_query($koneksi, "UPDATE produk SET nama='$nama', harga='$harga', deskripsi='$deskripsi' WHERE id='$id'");

    if ($input) {
      echo "<script>alert('Sukses')</script>";
      echo "<meta http-equiv='refresh' content='0; url=?page=produk/edit&id=$id'></script>";
    }else{
      echo "<script>alert('Terjadi kesalahan, coba ulangi kembali !')</script>";
      echo "<meta http-equiv='refresh' content='0; url=?page=produk/edit&id=$id'></script>";
    }



}



 ?>