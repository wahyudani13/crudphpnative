<?php

use LDAP\Result;

include "conn.php";
$id = $_GET['id'];
$query = "SELECT * FROM table_barang WHERE id = $id";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // var_dump($row = $result->fetch_assoc());
    while ($dataBarang = $result->fetch_assoc()) {
        $id = $dataBarang["id"];
        $nama = $dataBarang["nama"];
        $quantity = $dataBarang["quantity"];
        $keterangan = $dataBarang["keterangan"];
    }
}
