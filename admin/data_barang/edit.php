<?php
include '../../koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM data_barang WHERE id= '$id'");
$data = mysqli_fetch_array($query);
$nama_barang = $data['nama_barang'];
$deskripsi = $data['deskripsi'];
$id_kategori = $data['id_kategori'];
$harga = $data['harga'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Barang</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../../assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../assets/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../../assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto"></ul>
        </nav>
        <?php include_once("../sidebar.php"); ?>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Edit Data Barang</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Edit Data Barang</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MAIN CONTENT -->
            <section class="content">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Data Barang</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="proses_edit.php" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <input type="hidden" name="id" value="<?=$id ?>">
                                    <div class="form-group">
                                        <label>Nama Barang</label>
                                        <input type="text" name="nama_barang_post" class="form-control" placeholder="Masukan Nama Barang" value="<?= $nama_barang ?>" required>
                                    </div>
                                <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="deskripsi_post" class="form-control" rows="3" required><?= $deskripsi ?></textarea>
                            </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="number" name="harga_post" class="form-control" placeholder="Masukan Harga Barang" value="<?= $harga ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="inputState">Kategori</label>
                            <select id="inputState" class="form-control" name="kategori_post">
                                
                                <?php 
                                include '../../koneksi.php';
                                $kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
                                while($row = mysqli_fetch_array($kategori)){
                                ?>
                                <option value="<?= $row['id']; ?>" <?= ($row['id']==$id_kategori)?"selected":"" ?>><?php echo $row['nama_kategori']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pilih Gambar</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file"name="gambar_post" class="custom-file-input" required>
                                    <label class="custom-file-label">Pilih File Gambar</label>
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="index.php" type="button" class="btn btn-default">kembali</a>
                </div>
                </form>
                </div>
            </section>
    <!-- MAIN CONTENT -->
    </div>
    <footer class="main-footer">
    <strong>Copyright &copy; Yaser Rayhan
    <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.2.0
    </div>
    </footer>
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
    </div>

    <!-- jQuery -->
    <script src="../../assets/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../../assets/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../../assets/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../../assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../../assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../../assets/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../../assets/plugins/moment/moment.min.js"></script>
    <script src="../../assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../../assets/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../assets/dist/js/adminlte.js"></script>
</body>
</html>