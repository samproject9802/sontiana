<?php
include_once 'config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$notelepon = $_POST['notelepon'];

$sql = "INSERT INTO `table_customer`
VALUES ('$username', '$password', '$nik', '$nama', '$alamat', '$notelepon')";
$conn->query($sql);
header('Location: ../../index.php?page=beranda');
