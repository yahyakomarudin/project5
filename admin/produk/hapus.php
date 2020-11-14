<?php 



    $input = mysqli_query($koneksi, "DELETE FROM produk WHERE id='$_GET[id]'");

    if ($input) {
      echo "<script>alert('Sukses')</script>";
      echo "<meta http-equiv='refresh' content='0; url=?page=produk/index'></script>";
    }else{
      echo "<script>alert('Terjadi kesalahan, coba ulangi kembali !')</script>";
      echo "<meta http-equiv='refresh' content='0; url=?page=produk/index'></script>";
    }





 ?>