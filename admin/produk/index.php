    <section class="content-header">
      <h1>DATA PRODUK</h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="?page=produk/tambah" class="btn btn-success btn-sm">Add</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th><center>No.</center></th>
                    <th><center>Nama</center></th>
                    <th><center>Harga</center></th>
                    <th><center>Deskripsi</center></th>
                    <th><center>Aksi</center></th>
                  </tr>
                </thead>
                 <tbody>
                  <?php 
                    $no = 1;
                    $mysql = mysqli_query($koneksi, "SELECT * FROM produk");
                    while ($data = mysqli_fetch_array($mysql)) {
                   ?>
                  <tr>
                    <td><center><?php echo $no++ ?></center></td>
                    <td><center><?php echo $data['nama'] ?></center></td>
                    <td><center><?php echo $data['harga'] ?></center></td>
                    <td><center><?php echo $data['deskripsi'] ?></center></td>
                    <td>
                      <center>
                        <a href="?page=produk/edit&id=<?php echo $data['id'] ?>" class="btn btn-primary btn-sm">Update</a>
                        <a href="?page=produk/hapus&id=<?php echo $data['id'] ?>" class="btn btn-danger btn-sm" onclick="return.confirm('Yakin ingin menghapus data ini?!);">Delete</a>
                      </center>
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
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