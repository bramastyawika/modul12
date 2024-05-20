<?php
    //variable koneksi dengan databse mysql
    $host = "127.0.0.1:3308";
    $user = "root";
    $paswd = "";
    $name = "db_kuliah";

    //proses koneksi
    $link = mysqli_connect($host, $user, $paswd, $name);

    //periksa koneksi,jika gagal menampilkan pesan eror
    if(!$link){
        die ("koneksi dengan database gagal:".mysqli_connect_error().
        " - ".mysqli_connect_error());
    }
?>