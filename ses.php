<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Prediksi SES</title>
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
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

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
                <a class="nav-link collapsed" href="index.php">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-heading">Data</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="data.php">
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
            <h1>Prediksi SES</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item ">Data</li>
                    <li class="breadcrumb-item active">Prediksi SES</li>
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
                                    <h4 class="card-title">Prediksi Nilai Ekspor</h4>
                                    <form class="form-sample" method="POST" action="#">
                                        <p class="card-description">Prediksi Nilai Ekspor Migas Menggunakan SES dan Grid Search</p>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <label for="minAlpha">Min Alpha:</label>
                                                    <div class="col-sm-8">
                                                        <input type="number" value="0.001" id="minAlpha" name="min_alpha" class="form-control" placeholder="Min Alpha" step="0.001" min="0.001" max="0.999" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <label for="maxAlpha">Max Alpha:</label>
                                                    <div class="col-sm-8">
                                                        <input type="number" value="0.999" id="maxAlpha" name="max_alpha" class="form-control" placeholder="Max Alpha" step="0.001" min="0.001" max="0.999" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <label for="increment">Increment:</label>
                                                    <div class="col-sm-8">
                                                        <input type="number" id="increment" value="0.001" name="increment" class="form-control" placeholder="Increment" step="0.001" min="0.001" max="0.999" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <br>

                                        <br>
                                        <button type="submit" class="btn btn-primary btn-fw">Submit</button>
                                    </form>
                                    <?php
                                    include 'koneksi.php';
                                    //function metode ses
                                    function hitungSES($data, $alpha, $finalYear)
                                    {
                                        $hasilPrediksi = [];
                                        $n = count($data);
                                        $hasilPrediksi[0] = $data[0];
                                        for ($i = 1; $i <= $finalYear * 12; $i++) {
                                            if ($i <= $n) {
                                                //rumus metode SES
                                                $hasilPrediksi[$i] = $alpha * $data[$i - 1] + (1 - $alpha) * $hasilPrediksi[$i - 1];
                                            } else {
                                                break;
                                            }
                                        }
                                        return $hasilPrediksi;
                                    }



                                    $query = "SELECT MIN(periode) AS startYear, MAX(periode) AS endYear FROM ekspor";
                                    $result = $connection->query($query);
                                    $row = $result->fetch_assoc();
                                    $startYear = date("Y", strtotime($row["startYear"]));
                                    $endYear = date("Y", strtotime($row["endYear"]));

                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                        $minAlpha = $_POST["min_alpha"];
                                        $maxAlpha = $_POST["max_alpha"];
                                        $increment = $_POST["increment"];

                                        $bestAlpha = 0;
                                        $bestMape = PHP_INT_MAX;
                                        //Proses Grid Search pencarian nilai alpha terbaik
                                        for ($alpha = $minAlpha; $alpha < $maxAlpha + $increment; $alpha += $increment) {
                                            $query = "SELECT nilai_ekspor FROM ekspor WHERE periode BETWEEN '$startYear-01-01' AND '$endYear-12-31' ORDER BY periode";
                                            $result = $connection->query($query);

                                            $historicalData = [];
                                            while ($row = $result->fetch_assoc()) {
                                                $historicalData[] = (float)$row["nilai_ekspor"];
                                            }
                                            //pelatihan model ses
                                            $hasilPrediksi = hitungSES($historicalData, $alpha, $endYear - $startYear + 1);

                                            $totalError = 0;
                                            $count = 0;
                                            //pengujian mape
                                            for ($i = 0; $i < count($hasilPrediksi); $i++) {
                                                if ($i < count($historicalData)) {
                                                    $totalError += (abs($historicalData[$i] - $hasilPrediksi[$i]) / $historicalData[$i] * 100);
                                                    $count++;
                                                }
                                            }
                                            $mape = $count > 0 ? ($totalError / $count) : 0;
                                            //pencarian nilai alpha terbaik berdasarkan MAPE terkecil
                                            if ($mape < $bestMape) {
                                                $bestMape = $mape;
                                                $bestAlpha = $alpha;
                                            }
                                            //menyimpan nilai mape dan alpha
                                            $mapeKey = number_format($alpha, 3);
                                            $mapeValues[$mapeKey] = $mape;
                                        }
                                    ?>

                                        <h4 class="card-title mt-5">Tabel Hasil Prediksi SES </h4>
                                        <div class="table-responsive" style="text-align:center">
                                            <table class="table table-bordered" style="text-align:center" id="myTable1">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Bulan</th>
                                                        <th>Nilai Aktual </th>
                                                        <th>Prediksi SES</th>
                                                        <th>Percentage Error</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $hasilPrediksi = hitungSES($historicalData, $bestAlpha, $endYear - $startYear + 1);
                                                    $totalMonths = count($hasilPrediksi);

                                                    for ($i = 0; $i < $totalMonths; $i++) {
                                                        $bulan = date("M Y", strtotime($startYear . "-01-01 +" . $i . " months"));
                                                        $aktual = isset($historicalData[$i]) ? number_format($historicalData[$i], 1) : "-";
                                                        $prediksi = number_format($hasilPrediksi[$i], 2);
                                                        $pe = "-";

                                                        if ($aktual !== "-") {
                                                            $pe = number_format((abs($historicalData[$i] - $hasilPrediksi[$i])) / $historicalData[$i] * 100, 3);
                                                        }

                                                        echo '<tr>';
                                                        echo '<td>' . ($i + 1) . '</td>';
                                                        echo '<td>' . $bulan . '</td>';
                                                        echo '<td>' . $aktual . '</td>';
                                                        echo '<td>' . $prediksi . '</td>';
                                                        echo '<td>' . $pe . '</td>';
                                                        echo '</tr>';
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>

                                        <h4 class="card-title mt-5">Nilai Alpha Optimum</h4>
                                        <div class="alert alert-success">
                                            <p class="mb-0">
                                                <?php
                                                echo "Alpha terbaik: " . number_format($bestAlpha, 3);
                                                ?>
                                            </p>
                                        </div>

                                        <h4 class="card-title mt-4">Nilai MAPE</h4>
                                        <div class="alert alert-success">
                                            <p class="mb-0">
                                                <?php
                                                echo "MAPE terbaik: " . number_format($bestMape, 6) . "%";
                                                ?>
                                            </p>
                                        </div>
                                        <!-- Line Chart -->
                                        <h4 class="card-title mt-5">Grafik Hasil Prediksi</h4>
                                        <div id="prediksiChart"></div>

                                        <h4 class="card-title mt-5">Tabel MAPE</h4>
                                        <div class="table-responsive" style="text-align:center">
                                            <table class="table table-bordered" style="text-align:center" id="myTable">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Alpha</th>
                                                        <th>MAPE</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                        $minAlpha = $_POST["min_alpha"];
                                                        $maxAlpha = $_POST["max_alpha"];
                                                        $increment = $_POST["increment"];
                                                        $no = 1;
                                                        for ($alpha = $minAlpha; $alpha < $maxAlpha + $increment; $alpha += $increment) {
                                                            $mape = isset($mapeValues[number_format($alpha, 3)]) ? $mapeValues[number_format($alpha, 3)] : "N/A";
                                                            echo '<tr>';
                                                            echo '<td>' . ($no++) . '</td>';
                                                            echo '<td>' . number_format($alpha, 3) . '</td>';
                                                            echo '<td>' . ($mape !== "N/A" ? number_format($mape, 6) . "%" : $mape) . '</td>';
                                                            echo '</tr>';
                                                        }
                                                    }
                                                    ?>

                                                </tbody>
                                            </table>
                                        </div>




                                        <h4 class="card-title mt-5">Grafik Mape</h4>
                                        <div id="mapeChart"></div>




                                    <?php } ?>
        </section><!-- End Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/quill/quill.js"></script>
    <script>
        $('#myTable').DataTable({
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
        });
    </script>
    <script>
        $('#myTable1').DataTable({
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
        });
    </script>
    <script>
        let periodeData = [
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                for ($i = 1; $i <= count($hasilPrediksi); $i++) {
                    echo "'" . date("M Y", strtotime($startYear . "-01-01 +" . $i . " months")) . "',";
                }
            }
            ?>
        ];

        var options = {
            series: [{
                name: 'Nilai Aktual',
                data: [<?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            for ($i = 0; $i < count($hasilPrediksi); $i++) {
                                if ($i < count($historicalData)) {
                                    echo $historicalData[$i] . ",";
                                } else {
                                    echo "null,";
                                }
                            }
                        }
                        ?>],
                color: '#FF1493'
            }, {
                name: 'Prediksi SES',
                data: [<?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            for ($i = 0; $i < count($hasilPrediksi); $i++) {
                                echo $hasilPrediksi[$i] . ",";
                            }
                        }
                        ?>],
                color: '#2084C5'

            }],
            chart: {
                height: 400,
                type: 'line',
                zoom: {
                    enabled: true
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
                width: 1
            },
            title: {
                text: 'Prediksi Nilai Ekspor Migas',
                align: 'left'
            },
            grid: {
                row: {
                    colors: ['#f3f3f3', 'transparent'],
                    opacity: 0.5
                },
            },
            xaxis: {
                type: 'datetime',
                categories: periodeData,
                title: {
                    text: 'Periode'
                }
            },
            yaxis: {
                min: <?php echo min($historicalData); ?>,
                max: <?php echo max($historicalData); ?>,
                labels: {
                    formatter: function(val) {
                        return val.toFixed(1);
                    }
                },
                title: {
                    text: 'Nilai Ekspor'
                }
            },

            tooltip: {
                x: {
                    format: 'MMMM yyyy',
                },
                y: {
                    formatter: function(val, {
                        seriesIndex,
                        dataPointIndex,
                        w
                    }) {
                        if (seriesIndex === 0 && w.globals.series[0][dataPointIndex] === null) {
                            return "-";
                        }
                        return val.toFixed(2);
                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#prediksiChart"), options);
        chart.render();
    </script>

    <script>
        var options = {
            series: [{
                name: 'MAPE',
                data: [<?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            foreach ($mapeValues as $mape) {
                                echo $mape . ",";
                            }
                        }
                        ?>],
                color: '#8724a8'
            }],
            chart: {
                height: 500,
                type: 'line',
                zoom: {
                    enabled: true
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
                width: 3
            },
            title: {
                text: 'Grafik MAPE',
                align: 'left'
            },
            grid: {
                row: {
                    colors: ['#f3f3f3', 'transparent'],
                    opacity: 0.5
                },
            },
            xaxis: {
                type: 'numeric',
                categories: [<?php
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    foreach ($mapeValues as $key => $mape) {
                                        echo $key . ",";
                                    }
                                }
                                ?>],
                title: {
                    text: 'Alpha'
                }
            },
            yaxis: {
                min: 0,
                max: 50,
                labels: {
                    formatter: function(val) {
                        return val.toFixed(1) + "%";
                    }
                },
                title: {
                    text: 'MAPE'
                }
            },
            tooltip: {
                x: {
                    formatter: function(val) {
                        return val;
                    }
                },
                y: {
                    formatter: function(val) {
                        return val.toFixed(6) + "%";
                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#mapeChart"), options);
        chart.render();
    </script>


    < script src="assets/js/main.js">
        </script>
</body>

</html>