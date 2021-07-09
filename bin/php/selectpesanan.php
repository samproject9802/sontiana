<?php
require_once 'config.php';

$kodepesan = $_POST['kode_pesan'];

$sql = "SELECT * FROM table_pemesanan WHERE Kd_pemesanan='$kodepesan'";
$result = $conn->query($sql);
$dataSaya = [];

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $dataSaya[] = $row;
    }
} else {
    $dataSaya[] = "Data Kosong";
}

echo json_encode($dataSaya);
