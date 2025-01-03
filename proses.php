<?php
include('koneksi.php');

$nama = $_POST['nama'];
$file = $_FILES['foto']['name'];
$tmp_dir = $_FILES['foto']['tmp_name'];
$ukuran = $_FILES['foto']['size'];

$direktori = 'gambar/';
$ekstensi = strtolower(pathinfo($file, PATHINFO_EXTENSION));
$valid_ekstensi = array('jpeg', 'jpg', 'png', 'gif');
$gambar = rand(1000, 1000000) . "." . $ekstensi;

if (in_array($ekstensi, $valid_ekstensi)) {
    if ($ukuran <= 1000000) { // 1MB
        if (move_uploaded_file($tmp_dir, $direktori . $gambar)) {
            $perintah = "INSERT INTO users (nama, foto) VALUES ('$nama', '$gambar')";
            if (mysqli_query($koneksi, $perintah)) {
                echo "<html>
                <head>
                    <meta charset=\"UTF-8\">
                    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
                    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65\" crossorigin=\"anonymous\">
                    <title>Proses Berhasil</title>
                    <script>
                        setTimeout(function() {
                            window.location.href = 'tampil_foto.php';
                        }, 3000); // 3 detik
                    </script>
                </head>
                <body class=\"bg-light\">
                    <div class=\"container mt-5\">
                        <div class=\"card shadow\">
                            <div class=\"card-header bg-success text-white text-center\">
                                <h4>Berhasil Disimpan</h4>
                            </div>
                            <div class=\"card-body text-center\">
                                <h5>Nama: $nama</h5>
                                <img src=\"$direktori$gambar\" alt=\"Foto\" class=\"img-thumbnail\" style=\"width: 200px; height: auto;\">
                                <p class=\"mt-3\">Anda akan dialihkan ke halaman berikutnya...</p>
                            </div>
                        </div>
                    </div>
                </body>
                </html>";
            } else {
                echo "Gagal menyimpan data: " . mysqli_error($koneksi);
            }
        } else {
            echo "Gagal mengunggah gambar.";
        }
    } else {
        echo "<script>alert('Ukuran gambar terlalu besar');
        window.location.href = 'input_foto.php';</script>";
    }
} else {
    echo "Ekstensi file tidak sesuai.<br/><a href='input_foto.php'>Kembali</a>";
}
?>
