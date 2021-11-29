<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_latihan";

$koneksi = mysqli_connect($host,$user,$pass,$db);

if(mysqli_connect_errno()){
	echo "koneksi gagal, anda kurang beruntung : 
	".mysqli_connect_error();
} else{
	echo "Koneksi dengan database berhasil, selamat anda tidak pusing lagi";
}

?>