<?php
include("../koneksi.php");

if (isset($_POST['simpan'])) {
    $tamu_id = $_POST['tamu_id'];
    $nama_tamu = $_POST['nama_tamu'];
    $email = $_POST['email'];
    $status = $_POST['status'];

    $query = "UPDATE tamu2 SET 
              namaTamu='$nama_tamu', email='$email', status_kehadiran='$status'
              WHERE tamu_id=$tamu_id";
    $result = mysqli_query($db, $query);

    if ($result) {
        $_SESSION['notifikasi'] = "Data acara berhasil ditambahkan!";
        header('Location: tamu.php');
    } else {
        $_SESSION['notifikasi'] = "Gagal menambahkan data acara.";
        header('Location: tamu.php');
    }
} else {
    die("Akses dilarang...");
}
?>
