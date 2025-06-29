<?php
  include_once 'header_puskesmas.php';
  include_once 'sidebar_puskesmas.php';
  require_once 'praktikum_dbkoneksi.php'; // koneksi ke database
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Pasien</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Pasien</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel Data Pasien</h3>
        </div>
        <!-- /.card-header -->

        <div class="card-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Pasien</th>
                <th>Alamat</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql = "SELECT * FROM pasien";
              $rs = $dbh->query($sql);
              $no = 1;
              foreach ($rs as $row) {
                echo "<tr>
                        <td>{$no}</td>
                        <td>{$row['kode']}</td>
                        <td>{$row['nama']}</td>
                        <td>{$row['alamat']}</td>
                        <td>{$row['email']}</td>
                      </tr>";
                $no++;
              }
              ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include_once 'footer.php'; ?>
