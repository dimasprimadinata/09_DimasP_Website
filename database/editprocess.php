<?php 

include "databaseconn.php";

if (count($_POST) > 0) {
    // ambil id dari customer sebagai penanda 
    $id_barang = $_POST["id_barang"]; 
    $nama_barang = $_POST["nama_barang"]; 
    $harga = $_POST["harga"]; 
    $jumlah = $_POST["jumlah"];

    $query =
        "UPDATE barang set id_barang='" . 
        $id_barang . 
        "', nama_barang='" . 
        $nama_barang . 
        "', harga='" . 
        $harga . 
        "', jumlah='" . 
        $jumlah . 
        "' WHERE id_barang='" . 
        $id_barang . 
        "''";

    if (mysqli_query($db_connect, $query)) {
        $message = 2;
    } else {
        $message = 4;
    }
}

header("Location:tambah.php?message=" . $message . "");

?>