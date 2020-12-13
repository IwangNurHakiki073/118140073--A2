<?php
include "koneksidb.php";

$NIM = $_POST["NIM"];
$Nama = $_POST["Nama"];
$Prodi = $_POST["Prodi"];
$Angkatan = $POST["Angkatan"];

$sql = "INSERT into mahasiswa (NIM, Nama, Prodi, Angkatan) values($NIM, $Nama, $Prodi, $Angkatan) ";

$hasil = mysqli_query($koneksi, $sql);
