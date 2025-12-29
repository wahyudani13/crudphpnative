<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Insert Data Barang</h2>
                        <a href="view.php" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> View Data Barang</a>
                    </div>
                </div>
            </div>
            <form action="insert.php" method="post">
                <div class="row mb-3">
                    <div class="col-1">
                        <label for="id" class="form-label">ID :</label>
                    </div>
                    <div class="col-9">
                        <input type="text" class="form-control" name="id" id="id" placeholder="AUTO INCREMENT" disabled>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-1">
                        <label for="nama" class="form-label">NAMA BARANG :</label>
                    </div>
                    <div class="col-9">
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Barang">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-1">
                        <label for="quantity" class="form-label">Quantity :</label>
                    </div>
                    <div class="col-9">
                        <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Quantity">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-10">
                        <label for="keterangan" class="form-label">Keterangan :</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <textarea class="form-control" id="keterangan" rows="3" placeholder="Keterangan Barang" name="keterangan"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-10">
                        <input type="submit" class="btn btn-lg btn-success pull-right mt-3 mb-3" name="submit" value="Add">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>