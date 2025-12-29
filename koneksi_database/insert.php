<?php
include "conn.php";

// $sql = "INSERT INTO table_barang ( nama, quantity, keterangan)
// VALUES ('barang 4', 12, 'ini barang ke 4')";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();


if (isset($_POST['submit'])) {
    $nama = $_POST["nama"];
    $quantity = $_POST["quantity"];
    $keterangan = $_POST["keterangan"];

    // include database connection file
    include_once("conn.php");

    // Insert user data into table
    // $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");
    $query = "INSERT INTO table_barang(nama, quantity, keterangan) VALUES ('$nama', '$quantity', '$keterangan')";
    $result = $conn->query($query);

    if ($result == false) {
        // output data of each row
        // while ($row = $result->fetch_assoc()) {
        //     echo "id: " . $row["id"] . " - Name: " . $row["nama"] . " " . " Quantity : " . " " .  $row["quantity"] . " " . " Keterangan: " . $row["keterangan"] . " " . "<br>";
        // }
        // Show message when user added
        echo "Barang added unsuccessfull.";
    } else {
        echo "Barang added successfully. <a href='view.php' class='btn btn-success pull-right'><i class='fa fa-plus'></i> View Barang</a>";
    }
    $conn->close();
}
