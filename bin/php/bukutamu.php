<?php
include_once 'config.php';

date_default_timezone_set("Asia/Jakarta");
$tanggal = date("Y-m-d");
$nama = $_POST['nama'];
$komentar = $_POST['komentar'];

if (isset($_POST['submit'])) {
    $sql = "INSERT INTO table_bukutamu
            VALUES ('', '$tanggal', '$nama', '$komentar')";
    $conn->query($sql);
    header('location: ../../index.php?page=bukutamu');
}
