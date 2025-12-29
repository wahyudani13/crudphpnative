<?php
include "conn.php";

// $sql = "UPDATE table_barang SET keterangan='keterangan ini diupdate' WHERE id=2";

// if ($conn->query($sql) === TRUE) {
//     echo "Record updated successfully";
// } else {
//     echo "Error updating record: " . $conn->error;
// }

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $quantity = $_POST['quantity'];
    $keterangan = $_POST['keterangan'];

    // var_dump($id);

    // update user data
    // $result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email',mobile='$mobile' WHERE id=$id");
    $query = "UPDATE table_barang SET nama='$nama', quantity='$quantity', keterangan='$keterangan' WHERE id='$id'";
    $result = $conn->query($query);

    if ($result == false) {
        echo "Barang update unsuccessfull.";
    } else {
        echo "Barang update successfully. <a href='view.php' class='btn btn-success pull-right'><i class='fa fa-plus'></i> View Barang</a>";
    }
}

$conn->close();
