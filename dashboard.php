<?php include 'templates/header.php' ?>

<?php include 'templates/sidebar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Pembelian</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Pengambilan</p>
              </div>
              <div class="icon">
                <i class="fas fa-store"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header border-0">
                        <h3 class="card-title">Laporan Stok Barang</h3>
                        <div class="card-tools">
                            <a href="#" class="btn btn-tool btn-sm">
                                <i class="fas fa-download"></i>
                            </a>
                            <a href="#" class="btn btn-tool btn-sm">
                                <i class="fas fa-bars"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-striped table-valign-middle">
                            <thead>
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Stok saat ini</th>
                                    <th>Batas Minimal Stok</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                include "config/koneksi.php";

                                $query_mysql = mysqli_query($koneksi,"SELECT tb_stok.kd_jenis, tb_stok.stok_minimal, tb_stok.stok_akhir, tb_jenis.kd_barang, tb_barang.nama_barang FROM tb_stok INNER JOIN tb_jenis ON tb_stok.kd_jenis = tb_jenis.kd_jenis INNER JOIN tb_barang ON tb_jenis.kd_barang = tb_barang.kd_barang");

                                while($data = mysqli_fetch_array($query_mysql)){
                                ?>
                                    <tr>
                                        <td>
                                            <?php echo $data['nama_barang']; ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($data['stok_akhir'] <= $data['stok_minimal']) {
                                            ?>
                                                <small class="text-danger mr-1">
                                                    <i class="fas fa-arrow-down"></i>
                                                    <?php echo $data['stok_akhir']; ?>
                                                </small>
                                                <span class="badge bg-danger">Segera Restock!</span>
                                            <?php
                                            } else {
                                            ?>
                                                <small class="text-success mr-1">
                                                    <i class="fas fa-arrow-up"></i>
                                                    <?php echo $data['stok_akhir']; ?>
                                                </small>
                                            <?php
                                            }
                                            ?>
                                        </td>
                                        <td><?php echo $data['stok_minimal']; ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="card">
                    <div class="callout callout-info">
                        <h3 class="card-title">Pemberitahuan</h3>
                    </div>
                    <?php 
                  include "config/koneksi.php";
                  $query_mysql = mysqli_query($koneksi,"SELECT tb_stok.kd_jenis, tb_stok.stok_akhir, tb_jenis.kd_barang, tb_barang.nama_barang FROM tb_stok INNER JOIN tb_jenis ON tb_stok.kd_jenis = tb_jenis.kd_jenis INNER JOIN tb_barang ON tb_jenis.kd_barang = tb_barang.kd_barang where tb_stok.stok_akhir <= 3");
                  
                  while($data = mysqli_fetch_array($query_mysql)){
                ?>
                        <div class="callout callout-danger">
                            <h5>Produk <strong><?php echo $data['nama_barang']; ?></strong></h5>
                            <p>Stok saat ini adalah <?php echo $data['stok_akhir']; ?></p>
                            <p>Segera Melakukan Pemesanan Kembali, sebelum stok produk kamu habis!</p>
                        </div>
                <?php } ?>
                </div>
            </div>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include 'templates/footer.php' ?>
