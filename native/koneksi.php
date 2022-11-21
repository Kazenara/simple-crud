<?php
$server     = "localhost";
$username   = "root";
$password   = "root";
$db         = "user";
$koneksi    = mysqli_connect($server, $username, $password, $db);
// urutan pemanggilan variabel harus sama

// cek jika koneksi gagal ke database
if(mysqli_connect_errno()) {
    echo "koneksi gagal : ".mysqli_connect_error(); }
//  else {
//    echo "koneksi berhasil";
// }
?>