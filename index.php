<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Top Navigation</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">

   <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
   <!-- Google Font -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
 </head>
 <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
 <body class="hold-transition skin-blue fixed layout-top-nav" id="home">
  <div class="wrapper">

    <header class="main-header">
      <nav class="navbar navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <a href="assets/index2.html" class="navbar-brand"><b>E-Commerce Clothes</b>ECM</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="#home">Home</a></li>
              <li><a href="#product">Product</a></li>
              <li><a href="#registrasi" data-toggle="modal">Register</a></li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
      </nav>
    </header>

        <div class="modal fade" id="registrasi">
          <div class="modal-dialog">
             <form action="" method="POST">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h4 class="modal-title">Registrasi Akun Baru</h4>
              </div>
              <div class="modal-body">
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
  

              </div>
               <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" name="simpan" class="btn btn-primary">REGISTRASI</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </form>
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->




    <!-- Full Width Column -->
    <div class="content-wrapper">

      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
          <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <img src="assets/dist/img/12.jpg" alt="First slide" width="100%">

            <div class="carousel-caption">
              First Slide
            </div>
          </div>
          <div class="item">
            <img src="assets/dist/img/13.jpg" alt="Second slide" width="100%">

            <div class="carousel-caption">
              Second Slide
            </div>
          </div>
          <div class="item">
            <img src="assets/dist/img/14.jpg" alt="Third slide" width="100%">

            <div class="carousel-caption">
              Third Slide
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="fa fa-angle-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="fa fa-angle-right"></span>
        </a>
      </div>
      <div class="container">
        <section class="content" id="product">

          <div class="row">

          <?php 
                    include 'koneksi.php';
                    $mysql = mysqli_query($koneksi, "SELECT * FROM produk");
                    while ($data = mysqli_fetch_array($mysql)) {
                   ?>
          <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-aqua-active">
                <h3 class="widget-user-username"><?php echo $data['nama'] ?></h3>
                <h5 class="widget-user-desc"><?php echo $data['harga'] ?></h5>
              </div>
   
              <div class="box-footer">
                <div class="row">
                  <div class="col-sm-12 border-right">
                    <div class="description-block">
                      <span class="description-text"><?php echo $data['deskripsi'] ?></span>
                    </div>
                  </div>

                </div>

              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.18
      </div>
      <strong>Copyright &copy; 2020 <a href="https://adminlte.io">YahyaKOmarudin</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
</body>
</html>

<?php 


if (isset($_POST['simpan'])) {
  

$nama_user = $_POST['nama_user'];
$email_user = $_POST['email_user'];
$password_user = $_POST['password_user'];


$cek = mysqli_query($koneksi, "SELECT * FROM user WHERE nama_user='$nama_user'");
$ada = mysqli_num_rows($cek);
if ($ada == 1) {
    echo "<script>alert('maaf nama_user user sudah ada')</script>";
      echo "<meta http-equiv='refresh' content='0; url=index.php'></script>";
  }else{
    $input = mysqli_query($koneksi, "INSERT INTO user VALUES (NULL, '$nama_user', '$email_user', '$password_user');");

    if ($input) {
      echo "<script>alert('Sukses')</script>";
      echo "<meta http-equiv='refresh' content='0; url=?page=user/index'></script>";
    }else{
      echo "<script>alert('Terjadi kesalahan, coba ulangi kembali !')</script>";
      echo "<meta http-equiv='refresh' content='0; url=index.php'></script>";
    }
  }



}



 ?>
