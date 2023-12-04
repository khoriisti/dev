<?php include 'templates/header.php' ?>

<?php include 'templates/sidebar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="alert alert-primary" role="alert">
          Data Area
        </div>

        <a href="area_input.php"><div class="btn btn-sm btn-success"><i class="fas fa-plus fa-sm"></i> Tambah Area</div></a>

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <table class="table table-bordered table-striped table-hover">
          <tr align="center">
              <th>No</th>
              <th>Area</th>
              <th colspan="2">AKSI</th>
          </tr>
          <?php
          include "config/koneksi.php";
          $query_mysql = mysqli_query($koneksi,"SELECT * FROM tb_departemen");
          $no = 1;
          while($data = mysqli_fetch_array($query_mysql)){
              ?>
          <tr>
              <td width="20px"><?php echo $no++ ?></td>
              <td><?php echo $data['nama_departemen'] ?></td>
              <td width="10px"><a href="area_edit.php?id=<?php echo $data['kd_departemen']; ?>"><div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div></a></td>
              <td width="10px"><a href="area_hapus.php?id=<?php echo $data['kd_departemen']; ?>"><div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div></td>
          </tr>
          <?php } ?>
        </table>
    </section>
    <!-- /.content -->
  </div>

<?php include 'templates/footer.php' ?>
