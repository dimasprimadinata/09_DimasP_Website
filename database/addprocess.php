<?php

// add_process.php
include "databaseconn.php";

if (count($_POST) > 0) {
    $id_barang = $_POST["id_barang"];
    $nama_barang = $_POST["nama_barang"];
    $harga = $_POST["harga"];
    $jumlah = $_POST["jumlah"];

    $query = "INSERT INTO barang (id_barang, nama_barang, harga, jumlah) VALUES ('$id_barang', '$nama_barang', '$harga', '$jumlah')";

    if (mysqli_query($db_connect, $query)) {
        $message = 1;
    } else {
        $message = 4;
    }
}

header("Location:tambah.php?message=" . $message . "");