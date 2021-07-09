<?php
session_start();
include_once 'config.php';

date_default_timezone_set("Asia/Jakarta");
$currentdate = date("Y-m-d H:i:s");

$nama_customer = $_POST['namacust'];
$alamat_customer = $_POST['alamatcust'];
$notelp_customer = $_POST['noteleponcust'];
$pesanan = $_POST['pesanan'];
$jumlah_pesanan = $_POST['jumlahpesanan'];
$nik = $_SESSION['nik'];
$datapesanan = [];

$sql = "INSERT INTO table_pemesanan VALUES ('','$nik','$nama_customer', '$alamat_customer', '$notelp_customer', '$pesanan', '$jumlah_pesanan', '$currentdate')";
$conn->query($sql);


$sqlambildata = "SELECT * FROM `table_pupuk` as a 
                INNER JOIN table_pemesanan as b
                ON b.Kd_Pupuk = a.Kd_pupuk
                WHERE b.tanggal_transaksi = '$currentdate'";
$result = $conn->query($sqlambildata);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $datapesanan = $row;
    }
}

$total = $datapesanan['Harga'] * $datapesanan['Jlh_Pesanan'];

$sqltransaksi = "INSERT INTO `table_transaksi` VALUES ('$datapesanan[Kd_Pupuk]', '$datapesanan[tanggal_transaksi]', '$datapesanan[Nama]', '$datapesanan[Nm_pupuk]', '$datapesanan[Harga]', '$total', '$datapesanan[Jlh_Pesanan]')";
$conn->query($sqltransaksi);

$sqlvalidasi = "INSERT INTO `table_validasipemesanan` VALUES ('$datapesanan[Kd_pemesanan]', '$nik', '')";
$conn->query($sqlvalidasi);

header('Location: ../../user/index.php?page=pemesanan');
