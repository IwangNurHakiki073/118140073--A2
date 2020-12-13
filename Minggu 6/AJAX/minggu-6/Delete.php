<?php
include 'koneksidb.php';


$NIM = $_POST['NIM'];

$sql = "DELETE FROM mahasiswa WHERE NIM='$NIM'";
$hasil = mysqli_query($koneksi, $sql);
