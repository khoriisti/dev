<?php include 'templates/header.php' ?>

<?php include 'templates/sidebar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="alert alert-warning" role="alert">
          Form Edit Data Area
        </div>

        <a href="area.php"><div class="btn btn-sm btn-primary"><i class="right fas fa-angle-left"></i> Kembali ke Data Area</div></a>

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <?php
        include 'config/koneksi.php';
        $id = $_GET['id'];

        if (isset($id))
        {
          $data = mysqli_query($koneksi,"select * from tb_departemen where kd_departemen='$id'");
          while($d = mysqli_fetch_array($data)){

          ?>

            <form id="quickForm" method="post" action="area_input_aksi.php">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="InputNamaDepartemen">Nama Area</label>
                      <input type="hidden" name="kd_departemen" class="form-control" id="InputKdDepartemen" value="<?php echo $d['kd_departemen']; ?>"><input type="text" name="nama_departemen" class="form-control" id="InputNamaDepartemen" value="<?php echo $d['nama_departemen']; ?>">
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
        <?php 
          }

        }
        else
        {
           echo "<script type='text/javascript'>alert('Maaf, anda tidak diizinkan untuk ke halaman ini.');document.location.href = 'area.php';</script>";
        }

      ?>

    </section>
    <!-- /.content -->
  </div>

<?php include 'templates/footer.php' ?>

