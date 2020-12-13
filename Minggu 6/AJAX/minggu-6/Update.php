<?php
include "koneksidb.php";

$NIM = $_POST["NIM"];
$Nama = $_POST["Nama"];
$Prodi = $_POST["Prodi"];
$Angkatan = $_POST["Angkatan"];

$sql = ("UPDATE  mahasiswa SET NIM='$NIM', Nama='$Nama', Prodi='$Prodi', Angkatan='$Angkatan'");
$hasil = mysqli_query($koneksi, $sql);

if ($query) {
    echo "Edit Data Berhasil";
} else {
    echo "Edit Data Gagal :" . mysqli_error($koneksi);
}
