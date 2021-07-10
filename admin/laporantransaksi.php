<?php
session_start();

if (!isset($_SESSION["username"])) {
	echo "Anda harus login dulu <br><a href='login.php'>Klik disini</a>";
	exit;
}

$level=$_SESSION["level"];

if ($level!=1) {
    echo "Anda tidak punya akses pada halaman admin";
    exit;
}

$id_user=$_SESSION["id_user"];
$username=$_SESSION["username"];
$gambar=$_SESSION["picture"];
$nama=$_SESSION["nama"];
$email=$_SESSION["email"];

?>



<?= include('include/header.php'); ?>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../adminlte/index3.html" class="brand-link">
      <img src="../adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">NaGiJe Tour</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/img/<?php echo $gambar; ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $nama; ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
       <?= include('include/navbar.php'); ?>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="#">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <a href="cetakpdf.php" class="btn btn-primary"><i class="fas fa-print"> Cetak</i></a>
                    </div>
                    
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Gallery Photo</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid"
                        aria-describedby="example1_info">
                        <thead>
                            <tr role="row">
                                <th>No</th>
                                <th>Nama Tour</th>
                                <th>Nama User</th>
                                <th>Tanggal Depart</th>
                                <th>Jumlah Orang</th>
                                <th>Konfirmasi</th>
                            </tr>
                        </thead>
                        <?php
                            include "../config/koneksi.php";
                            $data = mysqli_query($kon,"SELECT a.id_book, b.nama_tour, c.username, a.departure_date, a.nop, a.konfirmasi FROM booking a, tour b, users c WHERE a.id_tour = b.id_tour AND a.id_user = c.id_user");
                            $no = 1;
                            if(mysqli_num_rows($data) > 0){
                                while($d = mysqli_fetch_array($data))
                                    {?>
                        <tbody>
                        <tr class="odd">
                        <td class="dtr-control sorting_1" tabindex="0"><?php echo $no++; ?></td>
                        <td><?php echo $d["nama_tour"]; ?></td>
                        <td><?php echo $d["username"]; ?></td>
                        <td><?php echo $d["departure_date"]; ?></td>
                        <td><?php echo $d["nop"]; ?></td>
                        <td><?php if ($d["konfirmasi"] == 0):
                            ?>
                            <button class="btn btn-danger"> Proses</button>
                            <?php else :?>
                            <button class="btn btn-success"> Terkonfirmasi</button>
                            <?php endif; ?>
                        </td>
                        </tr>
                        </tbody>
                        <?php }
                            } ?>
                    </table>
                            <div class="gallery">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        V.0.0.1
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy;2021 <a href="https://github.com/Tnembull">Nagije</a>.</strong> All rights reserved.
    </footer>
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../adminlte/dist/js/demo.js"></script>
</body>
</html>
