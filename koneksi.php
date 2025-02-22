<?php 
    $con = mysqli_connect("localhost", "root", "", "toko_wargi");

    // cek koneksi
    if (mysqli_connect_errno()) {
        echo "Gagal Koneksi ke MySQL: " . mysqli_connect_error();
        exit();
    }
?>