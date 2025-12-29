<?php

include "conn.php";


// sql to delete a record
// $sql = "DELETE FROM table_barang WHERE id=3";

// if ($conn->query($sql) === TRUE) {
//     echo "Record deleted successfully";
// } else {
//     echo "Error deleting record: " . $conn->error;
// }

$id = $_GET['id'];
$query = "DELETE FROM table_barang WHERE id='$id'";
$result = $conn->query($query);

if ($result == false) {
    echo "Delete barang unsuccessfull.";
} else {
    echo "Delete barang successfully. <a href='view.php' class='btn btn-success pull-right'><i class='fa fa-plus'></i> View Barang</a>";
}

$conn->close();
