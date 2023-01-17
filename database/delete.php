<?php

include "databaseconn.php"; 
$customer_id = $_GET["id_barang"];

$query = "DELETE FROM barang WHERE id_barang='" . $id_barang . "'";

if(mysqli_query($db_connect, $query)){
    $message = 3; 
} else {
    $message = 4;
}

header("Location:tambah.php?message=" . $message . "");

?>