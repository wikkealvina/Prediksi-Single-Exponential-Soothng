<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

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
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Data</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="data.php">
          <i class="bi bi-database"> </i>
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
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <!-- KETERANGAN-->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">Prediksi Nilai Ekspor Migas</h5>
                  <p>Sistem ini digunakan untuk memprediksi nilai ekspor migas di Indonesia.
                    Metode yang digunakan adalah Single Exponential Smoothing.
                    Pada sistem ini juga terdapat algoritma Grid Search untuk mencari parameter optimal
                    agar mendapatkan hasil prediksi yang terbaik.</p>

                </div>
              </div>

            </div><!-- End KETERANGAN-->

            <!-- NILAI EKSPOR TERBARU -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">
                <?php

                ?>
                <div class="card-body">
                  <h5 class="card-title">Nilai Ekspor Migas <span>|
                      <?php
                      $periode = "SELECT * FROM ekspor ORDER BY periode DESC LIMIT 1";
                      $result = mysqli_query($connection, $periode);
                      $row = mysqli_fetch_assoc($result);
                      $periode = strtotime($row['periode']);
                      $nama_bulan = date('F', $periode);
                      $tahun = date('Y', $periode);
                      echo $nama_bulan . ' ' . $tahun;
                      ?>
                    </span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>
                        <?php
                        $nilaiEkspor = "SELECT * FROM ekspor ORDER BY periode DESC LIMIT 1";
                        $result = mysqli_query($connection, $nilaiEkspor);
                        $row = mysqli_fetch_assoc($result);

                        if ($row) {
                          echo $row['nilai_ekspor'] . "jt";
                        } else {
                          echo "Data ekspor tidak ditemukan";
                        }
                        ?>

                      </h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End NILAI EKSPOR TERBARU -->

            <!-- FLUKTUASI -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Fluktuasi <span>|
                      <?php
                      $periode = "SELECT * FROM ekspor ORDER BY periode DESC LIMIT 1";
                      $result = mysqli_query($connection, $periode);
                      $row = mysqli_fetch_assoc($result);
                      $periode = strtotime($row['periode']);
                      $nama_bulan = date('F', $periode);
                      $tahun = date('Y', $periode);
                      echo $nama_bulan . ' ' . $tahun;
                      ?>
                    </span></h5>
                  <!-- End FLUKTUASI -->


                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6 class="card-title">
                        <?php
                        $periode = "SELECT * FROM ekspor ORDER BY periode DESC LIMIT 2";
                        $result = mysqli_query($connection, $periode);
                        $row = mysqli_fetch_assoc($result);
                        $row2 = mysqli_fetch_assoc($result);
                        $fluktuasi = $row['nilai_ekspor'] - $row2['nilai_ekspor'];
                        if ($fluktuasi > 0) {
                          echo "+";
                        }
                        echo $fluktuasi . "jt";
                        ?>

                        <span>
                          <?php
                          $fluktuasi = $fluktuasi / $row2['nilai_ekspor'] * 100;
                          if ($fluktuasi > 0) {
                            echo "+";
                          }
                          echo "(" . number_format($fluktuasi, 2) . "%" . ")";
                          ?>
                        </span>
                      </h6>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <!-- Jumlah Data -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Total Data</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-folder2"></i>
                    </div>
                    <div class="ps-3">
                      <h6> <?php
                            $nilaiEkspor = "SELECT * FROM ekspor";
                            $result = mysqli_query($connection, $nilaiEkspor);
                            echo  mysqli_num_rows($result);
                            ?>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- End Jumlah Data-->


            <!-- Grafik Data -->
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Grafik Data </h5>

                  <!-- Line Chart -->
                  <div id="dataChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      // Ambil data nilai ekspor dari database menggunakan PHP
                      let nilaiEksporData = [
                        <?php
                        $nilaiEksporQuery = "SELECT * FROM ekspor ORDER BY periode";
                        $nilaiEksporResult = mysqli_query($connection, $nilaiEksporQuery);
                        while ($row = mysqli_fetch_assoc($nilaiEksporResult)) {
                          echo $row['nilai_ekspor'] . ",";
                        }
                        ?>
                      ];

                      // Ambil data periode dari database menggunakan PHP
                      let periodeData = [
                        <?php
                        $periodeQuery = "SELECT * FROM ekspor ORDER BY periode";
                        $periodeResult = mysqli_query($connection, $periodeQuery);
                        while ($row = mysqli_fetch_assoc($periodeResult)) {
                          echo "'" . $row['periode'] . "',";
                        }
                        ?>
                      ];

                      new ApexCharts(document.querySelector("#dataChart"), {
                        series: [{
                          name: 'Nilai Ekspor',
                          data: nilaiEksporData,
                        }],
                        chart: {
                          height: 500,
                          type: 'line',
                          zoom: {
                            enabled: true
                          }
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['navy'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'datetime',
                          categories: periodeData // Gunakan data periode sebagai label sumbu x
                        },
                        tooltip: {
                          x: {
                            format: 'MMMM yyyy', // Format tampilan tooltip menjadi nama bulan dan tahun
                          },
                        },


                      }).render();
                    });
                  </script>
                  <!-- End Grafk Data -->

                  <!-- End Line Chart -->
                </div>

              </div>
            </div><!-- End Reports -->
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