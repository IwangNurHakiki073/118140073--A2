<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "prakmahasiswa";

$koneksi = mysqli_connect($host, $user, $password, $db);
if (!$koneksi) {
    die("Koneksi database gagal: silahkan cek lagi" . mysqli_connect_error());
}
