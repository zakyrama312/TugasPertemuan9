<?php
include('koneksi.php');

$del = $_GET['del'];

$perintah2 = "SELECT foto FROM users WHERE id = $del";
$result = mysqli_query($koneksi, $perintah2);
$data = mysqli_fetch_assoc($result);

if ($data) {
    unlink("gambar/" . $data['foto']); // Menghapus file gambar dari folder
    $perintah1 = "DELETE FROM users WHERE id = $del";
    if (mysqli_query($koneksi, $perintah1)) {
        echo "<script>alert('Gambar berhasil dihapus');
        window.location.href = 'tampil_foto.php';</script>";
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
} else {
    echo "Data tidak ditemukan.<br/><a href='tampil_foto.php'>Kembali</a>";
}
?>