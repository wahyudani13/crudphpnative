<?php
include "conn.php";

$sql = "SELECT id, nama, quantity, keterangan FROM table_barang";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    // while ($row = $result->fetch_assoc()) {
    //     echo "id: " . $row["id"] . " - Name: " . $row["nama"] . " " . " Quantity : " . " " .  $row["quantity"] . " " . " Keterangan: " . $row["keterangan"] . " " . "<br>";
    // }
} else {
    echo "0 results";
}
$conn->close();
