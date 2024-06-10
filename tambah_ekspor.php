<?php
include "koneksi.php";

$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$nilai_ekspor = $_POST['nilai_ekspor'];

$query = "INSERT INTO ekspor (periode, nilai_ekspor) VALUES ('$tahun-$bulan-01', '$nilai_ekspor')";

if (mysqli_query($connection, $query)) {
    echo "Data berhasil ditambahkan.";
    header("Location: data.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
