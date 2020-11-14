<?php 



    $input = mysqli_query($koneksi, "DELETE FROM user WHERE id_user='$_GET[id_user]'");

    if ($input) {
      echo "<script>alert('Sukses')</script>";
      echo "<meta http-equiv='refresh' content='0; url=?page=user/index'></script>";
    }else{
      echo "<script>alert('Terjadi kesalahan, coba ulangi kembali !')</script>";
      echo "<meta http-equiv='refresh' content='0; url=?page=user/index'></script>";
    }





 ?>