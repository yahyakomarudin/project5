
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
                  <tr>
                    <td>
                      <label>Nama</label>
                      <input type="text" name="nama_user" class="form-control" required="" placeholder="Nama user ..."  autocomplete="off">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label>Email</label>
                      <input type="email" name="email_user" class="form-control" required="" placeholder="Email user ..." autocomplete="off">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label>Password</label>
                      <input type="text" name="password_user" class="form-control" required="" placeholder="Password user ..." autocomplete="off">
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
  

$nama_user = $_POST['nama_user'];
$email_user = $_POST['email_user'];
$password_user = $_POST['password_user'];


$cek = mysqli_query($koneksi, "SELECT * FROM user WHERE nama_user='$nama_user'");
$ada = mysqli_num_rows($cek);
if ($ada == 1) {
    echo "<script>alert('maaf nama_user user sudah ada')</script>";
      echo "<meta http-equiv='refresh' content='0; url=?page=user/tambah'></script>";
  }else{
    $input = mysqli_query($koneksi, "INSERT INTO user VALUES (NULL, '$nama_user', '$email_user', '$password_user');");

    if ($input) {
      echo "<script>alert('Sukses')</script>";
      echo "<meta http-equiv='refresh' content='0; url=?page=user/index'></script>";
    }else{
      echo "<script>alert('Terjadi kesalahan, coba ulangi kembali !')</script>";
      echo "<meta http-equiv='refresh' content='0; url=?page=user/tambah'></script>";
    }
  }



}



 ?>