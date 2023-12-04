<?php include 'templates/header.php' ?>

<?php include 'templates/sidebar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="alert alert-success" role="alert">
          Form Input Data Area
        </div>

        <a href="area.php"><div class="btn btn-sm btn-primary"><i class="right fas fa-angle-left"></i> Kembali ke Data Area</div></a>

        <?php
        include 'config/koneksi.php';

        $query = mysqli_query($koneksi, "SELECT max(kd_departemen) as kodeTerbesar FROM tb_departemen");
        $data = mysqli_fetch_array($query);
        $kodeDepartemen = $data['kodeTerbesar'];

        $urutan = (int) substr($kodeDepartemen, 1, 2);

        $urutan++;

        $huruf = "D";
        $kodeDepartemen = $huruf . sprintf("%02s", $urutan);

        ?>

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <form id="quickForm" method="post" action="area_input_aksi.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputNamaDepartemen">Nama Area</label>
                    <input type="hidden" name="kd_departemen" class="form-control" id="InputKdDepartemen" value="<?php echo $kodeDepartemen; ?>"><input type="text" name="nama_departemen" class="form-control" id="InputNamaDepartemen" placeholder="Enter Nama Area">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

    </section>
    <!-- /.content -->
  </div>

<?php include 'templates/footer.php' ?>

