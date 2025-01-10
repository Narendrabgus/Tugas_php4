<!-- <div class="row">
    <div>
        <form action="" method="POST">
        <div>Ganti password</div>
        <input
            type="password"
            name="password"
            class="form-control my-4 py-2"
            placeholder="Tuliskan Password Baru Jika Ingin Mengganti Password Saja"
        />
            <!-- menggunakan fungsi enkripsi md5 supaya sama dengan password yang tersimpan di database -->
            <!-- <?= $password = md5($_POST['password']); ?> --> 
        <!--</form>
    </div>
    <div>
        <label for="formGroupExampleInput2" class="form-label">Ganti Gambar</label>
        <input type="file" class="form-control" name="Gambar">
    </div>
    <div>
        <input type="submit" value="simpan" name="simpan" class="btn btn-primary">
    </div>
</div> -->

<?php
// session_start();
include 'koneksi.php'; // Sesuaikan dengan file koneksi Anda.

// Ambil data user dari sesi
$username = $_SESSION['username'];

// Ambil data user dari database
$sql = "SELECT * FROM mahasiswa WHERE username = '$username'";
$hasil = $conn->query($sql);
$row = $hasil->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'];
    $foto_lama = $row['gambar'];

    // Update password jika diisi
    if (!empty($password)) {
        $password_hash = md5($password);
        $sql = "UPDATE user SET password = '$password_hash' WHERE username = '$username'";
        $conn->query($sql);
    }

    // Update foto jika diunggah
    if (!empty($_FILES['gambar']['name'])) {
        $foto_baru = $_FILES['gambar']['name'];
        $target_dir = "img/";
        $target_file = $target_dir . basename($foto_baru);

        // Pindahkan file ke folder img
        if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file)) {
            $sql = "UPDATE user SET foto = '$foto_baru' WHERE username = '$username'";
            $conn->query($sql);

            // Hapus foto lama jika bukan default
            if ($foto_lama !== 'default.png' && file_exists($target_dir . $foto_lama)) {
                unlink($target_dir . $foto_lama);
            }
        }
    }

    header("Location: user.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> <!-- Sesuaikan dengan file CSS Anda -->
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <label for="password">Ganti Password</label>
        <input
            type="password"
            name="password"
            class="form-control my-4 py-2"
            placeholder="Tuliskan Password Baru Jika Ingin Mengganti Password Saja"
        />

        <label for="foto">Ganti Foto Profil</label>
        <input type="file" class="form-control" name="Gambar">

        <p>Foto Profil Saat Ini:</p>
        <img src="img/<?= $row['gambar'] ?>" width="100">
        
        <input type="submit" value="simpan" name="simpan" class="btn btn-primary">
    </form>
</body>
</html>
