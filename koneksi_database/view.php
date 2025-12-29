<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Data Barang</h2>
                        <a href="viewInsert.php" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Barang</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "read.php";
                    ?>

                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Nama Barang</th>
                            <th>Quantity Barang</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['nama'] . "</td>";
                            echo "<td>" . $row['quantity'] . "</td>";
                            echo "<td>" . $row['keterangan'] . "</td>";
                            echo "<td><a href='viewEdit.php?id=$row[id]'>Edit</a> | <a href='delete.php?id=$row[id]'>Delete</a></td></tr>";
                        }
                        ?>
                    </table>

                </div>
            </div>
        </div>
    </div>
</body>

</html>