<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Gambar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Simpan & Tampil Gambar</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="proses.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Masukan Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="foto" class="form-label">Pilih Foto</label>
                                <input type="file" class="form-control" id="foto" name="foto" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" name="kirim" id="kirim">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
