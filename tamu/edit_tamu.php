<?php
include("../koneksi.php");

$id = $_GET['tamu_id'];
$query = "SELECT * FROM tamu2 WHERE tamu_id=$id";
$result = mysqli_query($db, $query);
$tamu = mysqli_fetch_assoc($result);

$query = "SELECT * FROM tamu2";
$result = mysqli_query($db, $query);

if (mysqli_num_rows($result) < 1) {
    die("Data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Tamu</title>
</head>
<body>
    <h1>Edit Tamu</h1>
    <form action="proses_edit_tamu.php" method="POST">
        <input type="hidden" name="tamu_id" value="<?= $tamu['tamu_id']; ?>">
        <p>
            <label>Nama Tamu: </label>
            <input type="text" name="nama_tamu" value="<?= $tamu['namaTamu']; ?>" required>
        </p>
        <p>
            <label>Email: </label>
            <input type="email" name="email" value="<?= $tamu['email']; ?>">
        </p>
        <p>
            <label>Status: </label>
            <select name="status">
                <option value="belum dikonfirmasi" <?= $tamu['status_kehadiran'] == 'belum dikonfirmasi' ? 'selected' : ''; ?>>Belum Dikonfirmasi</option>
                <option value="hadir" <?= $tamu['status_kehadiran'] == 'hadir' ? 'selected' : ''; ?>>Hadir</option>
                <option value="tidak hadir" <?= $tamu['status_kehadiran'] == 'tidak hadir' ? 'selected' : ''; ?>>Tidak Hadir</option>
            </select>
        </p>
        <p>
            <button type="submit" name="simpan">Simpan</button>
        </p>
    </form>
</body>
</html>
