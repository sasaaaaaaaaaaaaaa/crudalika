<?php
session_start();
// include "library/lib_login.php";
// if(!cek_login()){
//  header("location:login.php");
//  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php?halaman=home" class="nav-link">Home</a>
        </li>
        <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
          <a href="logout.php" class="nav-link"><i class="fa fa-power-off"></i> Logout</a>
        </li>
      </ul>
    </nav>

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">perpustakaan</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?= $_SESSION['nama'] ?></a>
          </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->




            <li class="nav-item">
              <a href="index.php?halaman=anggota" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  anggota
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?halaman=petugas" class="nav-link">
                <i class="nav-icon fas fa-user-tie"></i>
                <p>
                  petugas
                </p>
              </a>
            </li>
            
           </li>
              </li>
              
            <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               buku
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?halaman=buku" class="nav-link active">
                  <i class="nav-icon fas fa-book"></i>
                  <p>buku</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="index.php?halaman=kategori" class="nav-link">
                  <i class="nav-icon fas fa-list"></i>
                  <p>kategori</p>
                </a>
              </li>
              </li>
            
           
            </ul>
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  peminjaman
                </p>
                <i class="right fas fa-angle-left"></i>
              </a>
            </li>
          </li>

          
          <li class="nav-item">
                <a href="index.php?halaman=pinjam" class="nav-link">
                  <i class="nav-icon fas fa-jxl"></i>
                  <p>pinjam</p>
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=kembali" class="nav-link">
                  <i class="nav-icon fas fa-arrow-rotate-left"></i>
                  <p>kembali</p>
                </a>
              </li> 
            </li>
              
              </li>
                <li class="nav-item">
                <a href="index.php?halaman=denda" class="nav-link">
                  <i class="nav-icon fas fa-money-bill"></i>
                  <p>denda</p>
                </a>
            </ul>
          </ul>
          
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
          <!-- <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div>/.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <?php
        
        if (isset($_GET['halaman'])) {
          switch ($_GET['halaman']) {
            
            case "home":
              include("views/dashboard.php");
              break;

            case "anggota";
              include("views/anggota/anggota.php");
              break;
            case "tambah_anggota":
              include("views/anggota/form_anggota.php");
              break;
            case "edit_anggota":
              include("views/anggota/form_edit_anggota.php");
              break;

              case "buku":
                include("views/buku/buku.php");
                break;

                  case "kategori":
                    include("views/kategori/kategori.php");
                    break;
                    case "tambah_kategori":
                      include("views/kategori/form_kategori.php");
                      break;
                      case "edit_kategori":
                        include("views/kategori/form_edit_kategori.php");
                        break;

                    case "denda":
                      include("views/denda/denda.php");
                      break;
                      case "tambah_denda":
                        include("views/denda/form_denda.php");
                        break;
                        case "edit_denda":
                          include("views/denda/form_edit_denda.php");
                          break;

                    case "kembali":
                      include("views/kembali/kembali.php");
                      break;
                      case "tambah_kembali":
                        include("views/kembali/form_kembali.php");
                        break;
                        case "edit_kembali":
                          include("views/kembali/form_edit_kembali.php");
                          break;

                      case "petugas":
                        include("views/petugas/petugas.php");
                        break;
                        case "tambah_petugas":
                          include("views/petugas/form_petugas.php");
                          break;
                          case "edit_petugas":
                            include("views/petugas/form_edit_petugas.php");
                            break;

                        case "pinjam":
                          include("views/pinjam/pinjam.php");
                          break;
                          case "tambah_pinjam":
                            include("views/pinjam/form_pinjam.php");
                            break;
                            case "edit_pinjam":
                              include("views/pinjam/form_edit_pinjam.php");
                              break;
    
  
          }
        } else {
          include("views/dashboard.php");
        }

        ?>



      </section>
      
      
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer> -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/pdfmake/pdfmake.min.js"></script>
  <script src="plugins/pdfmake/vfs_fonts.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["excel", "pdf", "print"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    });
  </script>
  <!-- AdminLTE for demo purposes -->

</body>

</html>