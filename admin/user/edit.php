<?php 
	$mysql = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$_GET[id_user]'");
	$data = mysqli_fetch_array($mysql);
?>


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-6">
          <div class="box">
            <div class="box-header text-center">
              <h3>TAMBAH DATA USER</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table">
                <form action="" method="POST">
                	<input type="hidden" name="id_user" value="<?php echo $data['id_user'] ?>">
                  <tr>
                    <td>
                      <label>Nama</label>
                      <input type="text" name="nama_user" value="<?php echo $data['nama_user'] ?>" class="form-control" required="" placeholder="Nama user ..."  autocomplete="off">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label>Email</label>
                      <input type="email" name="email_user" value="<?php echo $data['email_user'] ?>" class="form-control" required="" placeholder="Email user ..." autocomplete="off">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label>Password</label>
                      <input type="text" name="password_user" value="<?php echo $data['password_user'] ?>" class="form-control" required="" placeholder="Password user ..." autocomplete="off">
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
  

$id_user = $_POST['id_user'];
$nama_user = $_POST['nama_user'];
$email_user = $_POST['email_user'];
$password_user = $_POST['password_user'];



    $input = mysqli_query($koneksi, "UPDATE user SET nama_user='$nama_user', email_user='$email_user', password_user='$password_user' WHERE id_user='$id_user'");

    if ($input) {
      echo "<script>alert('Sukses')</script>";
      echo "<meta http-equiv='refresh' content='0; url=?page=user/edit&id_user=$id_user'></script>";
    }else{
      echo "<script>alert('Terjadi kesalahan, coba ulangi kembali !')</script>";
      echo "<meta http-equiv='refresh' content='0; url=?page=user/edit&id_user=$id_user'></script>";
    }




}



 ?>
