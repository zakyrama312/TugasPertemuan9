<?php
include('koneksi.php');

$perintah = "SELECT * FROM users ORDER BY id DESC";
$query = mysqli_query($koneksi, $perintah);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tampil Foto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white text-center">
                <h4>Menampilkan Foto</h4>
                <a href="input_foto.php" class="btn btn-light btn-sm">Tambah Data</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">FOTO</th>
                            <th scope="col">DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        while ($data = mysqli_fetch_assoc($query)) { ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td class="text-center">
                                <a href="gambar/<?php echo $data['foto']; ?>" target="_blank">
                                    <img src="gambar/<?php echo $data['foto']; ?>" alt="Foto" class="img-thumbnail" style="width: 100px;">
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="delete.php?del=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm">DELETE</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
