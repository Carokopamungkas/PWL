<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Garage Sepatu</title>
</head>

<body>
    <div class="container">
        <div class="card" style="width: 48rem;">
            <div class="card-body">
                <h5 class="card-title">Add Stok Sepatu</h5>
                <form action="ins_sepatu.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">Nama Sepatu</label>
                        <input type="text" name="nama" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga Sepatu</label>
                        <input type="text" name="harga" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Stok</label>
                        <input type="text" name="stok" class="form-control">
                        
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Simpan" class="btn btn-primary">
                    </div>
                </form>
                <a href="buku_sepatu.php" class="btn btn-primary">Daftar Sepatu</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>