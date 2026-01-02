<?php
include "conn.php";

$sql = "SELECT id, nama, quantity, keterangan FROM table_barang";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    return $result;
} else {
    echo "0 results";
}
$conn->close();
