<?php
include "koneksi.php";
$id_ekspor = $_GET['id'];

$sql = "DELETE FROM ekspor WHERE id_ekspor = '$id_ekspor'";

$a = $connection->query($sql);

header("location:data.php");
