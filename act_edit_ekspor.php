<?php
include "koneksi.php";

// Get the 'id' from the URL
$id = $_GET['id'];

// Get the values from the form
$tahun = $_POST['tahun'];
$nilai_ekspor = $_POST['nilai_ekspor'];

// Update the record in the 'ekspor' table
$query = "UPDATE ekspor SET periode = '$tahun-01', nilai_ekspor = '$nilai_ekspor' WHERE id_ekspor = '$id'";

// Execute the query
if ($connection->query($query) === TRUE) {
    //buat pindah ke data_ekspor.php
    header("location:data.php");
} else {
    echo "Error updating record: " . $connection->error;
}

// Close the database connection
$connection->close();
