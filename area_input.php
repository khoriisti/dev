<?php include 'templates/header.php' ?>

<?php include 'templates/sidebar.php' ?>

  <?php
  include 'config/koneksi.php';

  // cek nama departemen
  if (isset($_POST['nama_departemen'])) {
   $nama_departemen = $_POST['nama_departemen'];

   $query = mysqli_query($conn, "SELECT nama_departemen FROM tb_departemen WHERE nama_departemen = '$nama_departemen'"); 

   if($query->num_rows > 0) {
    echo "<script>alert('Nama Departemen sudah terdaftar');</script>";
   } else {
    mysqli_query($conn, "INSERT INTO tb_departemen (kd_departemen, nama_departemen) VALUES ('$kd_departemen','$nama_departemen')");
   }
  }

  // tampilkan data
  $stmt = mysqli_query($conn, "SELECT nama_departemen FROM tb_test");

  ?>

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
        
        // mengambil data departemen dengan kode paling besar
        $query = mysqli_query($koneksi, "SELECT max(kd_departemen) as kodeTerbesar FROM tb_departemen");
        $data = mysqli_fetch_array($query);
        $kodeDepartemen = $data['kodeTerbesar'];
         
        // mengambil angka dari kode departemen terbesar, menggunakan fungsi substr
        // dan diubah ke integer dengan (int)
        $urutan = (int) substr($kodeDepartemen, 1, 2);
        // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
        $urutan++;
         
        // membentuk kode departemen baru
        // perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
        // misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
        // angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya D 
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
                    <label for="InputKdDepartemen">Kode Area</label>
                    <input type="text" name="kd_departemen" class="form-control" id="InputKdDepartemen" value="<?php echo $kodeDepartemen; ?>">
                  </div>
                  <div class="form-group">
                    <label for="InputNamaDepartemen">Nama Area</label>
                    <input type="text" name="nama_departemen" class="form-control" id="InputNamaDepartemen" placeholder="Enter Nama Area">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

              <hr/>
 <br/>

 <table border="1">
  <tr>
   <td>No.</td>
   <td>Nama Departemen</td>
  </tr>

  <?php
  $no = 1;
  foreach ($stmt as $rows) :
  ?>
   
  <tr>
   <td><?= $no++; ?></td>
   <td><?= $rows['nama_departemen']; ?></td>
  </tr>

  <?php endforeach; ?>

 </table>

    </section>
    <!-- /.content -->
  </div>

<?php include 'templates/footer.php' ?>

