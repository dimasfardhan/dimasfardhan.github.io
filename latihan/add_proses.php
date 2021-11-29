<?php
include "koneksi.php";

$nik        = $_POST['nik'];
$nama       = $_POST['nama'];
$gender     = $_POST['gender'];
$alamat     = $_POST['alamat'];
$umur       = $_POST['umur'];
$jurusan    = $_POST['jurusan'];

mysqli_query($koneksi,"INSERT INTO siswa VALUES('$nik','$nama','$gender','$alamat','$umur','$jurusan')");

header("location:index.php");
?>s