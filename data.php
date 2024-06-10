<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Data</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <!-- datatables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css">
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>


  <!-- Vendor CSS Files -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    #myTable th,
    #myTable td {
      text-align: center;
    }
  </style>

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Prediksi</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <!-- tombol navigasi -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Data</li>

      <li class="nav-item">
        <a class="nav-link " href="data.php">
          <i class="bi bi-database"></i>
          <span>Data Ekspor Migas</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-heading">Prediksi</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="ses.php">
          <i class="bi bi-file-bar-graph"></i>
          <span>Prediksi</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->



    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Ekspor Migas</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item ">Data</li>
          <li class="breadcrumb-item active">Data Ekspor Migas</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">


                <div class="card-body">
                  <h5 class="card-title">Form Input Data Nilai Ekspor Migas</h5>

                  <form action="tambah_ekspor.php" class="forms-sample" method="post">
                    <div class="form-group">

                      <div class="form-group">
                        <label for="bulan">Bulan</label>
                        <select class="form-select" id="bulan" name="bulan">
                          <option value="01">Januari</option>
                          <option value="02">Februari</option>
                          <option value="03">Maret</option>
                          <option value="04">April</option>
                          <option value="05">Mei</option>
                          <option value="06">Juni</option>
                          <option value="07">Juli</option>
                          <option value="08">Agustus</option>
                          <option value="09">September</option>
                          <option value="10">Oktober</option>
                          <option value="11">November</option>
                          <option value="12">Desember</option>
                        </select>
                      </div>
                      <br>
                      <div class="form-group">
                        <label for="tahun">Tahun</label>

                        <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun" required>
                      </div>
                      <br>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Nilai Ekspor Migas</label>
                        <input type="text" class="form-control" id="nilai_ekspor" name="nilai_ekspor" placeholder="Nilai Ekspor Migas" required>
                      </div>
                      <br>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                  </form>
                </div>
              </div>

            </div><!-- End Customers Card -->
            <!-- Reports -->
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Data Ekspor Migas</h5>
                  <!-- Table with stripped rows -->
                  <table id="myTable" class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Periode</th>
                        <th>Nilai Ekspor Migas</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $query = "SELECT *, DATE_FORMAT(periode, '%M %Y') AS periode_bulan_tahun FROM ekspor ORDER BY periode ASC";
                      $output = $connection->query($query);
                      $count = 1;
                      while ($data = $output->fetch_array()) :
                      ?>
                        <tr>
                          <td><?php echo $count; ?></td>
                          <td><?php echo $data['periode_bulan_tahun']; ?></td>
                          <td><?php echo $data['nilai_ekspor']; ?></td>
                          <td>
                            <a href="edit_ekspor.php?id=<?php echo $data['id_ekspor'] ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                            <a href="hapus_ekspor.php?id=<?php echo $data['id_ekspor'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus?')"> <i class="fas fa-trash"></i> </a>
                          </td>
                        </tr>
                      <?php
                        $count++;
                      endwhile;
                      ?>
                    </tbody>
                  </table>

                  <script>
                    $('#myTable').DataTable({
                      "order": [
                        [4, "asc"],
                      ],
                      "lengthMenu": [
                        [5, 10, 25, 50, -1],
                        [5, 10, 25, 50, "All"]
                      ],
                    });
                  </script>
                </div>
              </div>
            </div>

          </div>
        </div><!-- End Left side columns -->


      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>