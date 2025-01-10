<div class="container">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-secondary mb-2" data-bs-toggle="modal" data-bs-target="#modalTambah">
        <i class="bi bi-plus-lg"></i> Tambah Gallery
    </button>
    <div class="row">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th class="w-75">Tanggal</th>
                        <th class="w-25">Gambar</th>
                        <th class="w-25">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM gallery ORDER BY Tanggal DESC";
                    $hasil = $conn->query($sql);

                    $no = 1;
                    while ($row = $hasil->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td>
                                <div>pada : <?= $row["Tanggal"] ?></div>
                                <div>oleh : <?= $row["Username"] ?></div>
                            </td>
                            <!-- <td><?= $row["isi"] ?></td> -->
                            <td>
                                <?php
                                if ($row["Gambar"] != '') {
                                    if (file_exists('img/' . $row["Gambar"] . '')) {
                                ?>
                                        <img src="img/<?= $row["Gambar"] ?>" width="100">
                                <?php
                                    }
                                }
                                ?>
                            </td>
                            <td>
                                <a href="#" title="edit" class="badge rounded-pill text-bg-success" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $row["ID"] ?>"><i class="bi bi-pencil"></i></a>
                                <a href="#" title="delete" class="badge rounded-pill text-bg-danger" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $row["ID"] ?>"><i class="bi bi-x-circle"></i></a>
                            <!-- Awal Modal Edit -->
                            <div class="modal fade" id="modalEdit<?= $row["ID"] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hIDden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Gallery</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="post" action="" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <!-- <div class="mb-3">
                                                    <label for="formGroupExampleInput" class="form-label">Judul</label>
                                                    <input type="hidden" name="ID" value="<?= $row["ID"] ?>">
                                                    <input type="text" class="form-control" name="judul" placeholder="Tuliskan Judul Artikel" value="<?= $row["judul"] ?>" required>
                                                </div> -->
                                                <!-- <div class="mb-3">
                                                    <label for="floatingTextarea2">Isi</label>
                                                    <textarea class="form-control" placeholder="Tuliskan Isi Artikel" name="isi" required><?= $row["isi"] ?></textarea>
                                                </div> -->
                                                <div class="mb-3">
                                                    <label for="formGroupExampleInput2" class="form-label">Ganti Gambar</label>
                                                    <input type="file" class="form-control" name="Gambar">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="formGroupExampleInput3" class="form-label">Gambar Lama</label>
                                                    <?php
                                                    if ($row["Gambar"] != '') {
                                                        if (file_exists('img/' . $row["Gambar"] . '')) {
                                                    ?>
                                                            <br><img src="img/<?= $row["Gambar"] ?>" width="100">
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                    <input type="hidden" name="gambar_lama" value="<?= $row["Gambar"] ?>">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <input type="submit" value="simpan" name="simpan" class="btn btn-primary">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Modal Edit -->

                            <!-- Awal Modal Hapus -->
                            <div class="modal fade" id="modalHapus<?= $row["ID"] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi Hapus Gallery</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="post" action="" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="formGroupExampleInput" class="form-label">Yakin akan menghapus Gallery "<strong><?= $no - 1 ?></strong>"?</label>
                                                    <input type="hidden" name="ID" value="<?= $row["ID"] ?>">
                                                    <input type="hidden" name="Gambar" value="<?= $row["Gambar"] ?>">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">batal</button>
                                                <input type="submit" value="hapus" name="hapus" class="btn btn-primary">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Modal Hapus -->
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    <tr>
                        <td colspan="4" style="text-align: left;"> <!-- ini untuk membuat keterangan total gallery  -->
                            Total gallery : <?= $hasil->num_rows; ?>
                        </td>
                    </tr>

                    <?php
                    // Konfigurasi jumlah data per halaman
                    $data_per_halaman = 3;

                    // Ambil halaman saat ini dari parameter URL, default halaman pertama
                    $halaman_sekarang = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                    if ($halaman_sekarang < 1) {
                        $halaman_sekarang = 1;
                    }

                    // Hitung offset untuk query SQL
                    $offset = ($halaman_sekarang - 1) * $data_per_halaman;

                    // Query untuk menghitung total data
                    $sql_total = "SELECT COUNT(*) AS total FROM gallery";
                    $result_total = $conn->query($sql_total);
                    $total_data = $result_total->fetch_assoc()['total'];

                    // Hitung total halaman
                    $total_halaman = ceil($total_data / $data_per_halaman);

                    // Query untuk data sesuai halaman
                    $sql = "SELECT * FROM gallery ORDER BY Tanggal DESC LIMIT $offset, $data_per_halaman";
                    $hasil = $conn->query($sql);
                    ?>

                    <tr>
                        <td colspan="4" style="text-align: right;">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-end">
                                    <!-- Tombol First -->
                                    <li class="page-item <?= $halaman_sekarang == 1 ? 'disabled' : '' ?>">
                                        <a class="page-link" href="?page=1" aria-label="First">
                                            <span aria-hidden="true">First</span>
                                        </a>
                                    </li>

                                    <!-- Tombol Previous -->
                                    <li class="page-item <?= $halaman_sekarang == 1 ? 'disabled' : '' ?>">
                                        <a class="page-link" href="?page=<?= $halaman_sekarang - 1 ?>" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>

                                    <!-- Nomor Halaman -->
                                    <?php for ($i = 1; $i <= $total_halaman; $i++): ?>
                                        <li class="page-item <?= $halaman_sekarang == $i ? 'active' : '' ?>">
                                            <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                                        </li>
                                    <?php endfor; ?>

                                    <!-- Tombol Next -->
                                    <li class="page-item <?= $halaman_sekarang == $total_halaman ? 'disabled' : '' ?>">
                                        <a class="page-link" href="?page=<?= $halaman_sekarang + 1 ?>" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>

                                    <!-- Tombol Last -->
                                    <li class="page-item <?= $halaman_sekarang == $total_halaman ? 'disabled' : '' ?>">
                                        <a class="page-link" href="?page=<?= $total_halaman ?>" aria-label="Last">
                                            <span aria-hidden="true">Last</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
       <!-- Awal Modal Tambah-->
       <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Gallery</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="modal-body">
                            <!-- <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Judul</label>
                                <input type="text" class="form-control" name="judul" placeholder="Tuliskan Judul Artikel" required>
                            </div> -->
                            <!-- <div class="mb-3">
                                <label for="floatingTextarea2">Isi</label>
                                <textarea class="form-control" placeholder="Tuliskan Isi Artikel" name="isi" required></textarea>
                            </div> -->
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Gambar</label>
                                <input type="file" class="form-control" name="gambar">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" value="simpan" name="simpan" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Akhir Modal Tambah-->
    </div>
</div>

<?php
include "upload_foto.php";

//jika tombol simpan diklik
if (isset($_POST['simpan'])) { //
    // $judul = $_POST['judul'];
    // $isi = $_POST['isi'];
    $Tanggal = date("Y-m-d H:i:s");
    $Username = $_SESSION['username'];
    $Gambar = 'Gambar';
    $nama_gambar = $_FILES['Gambar']['name'];

    //upload gambar
    if ($nama_gambar != '') {
        $cek_upload = upload_foto($_FILES["Gambar"]);

        if ($cek_upload['status']) {
            $Gambar = $cek_upload['message'];
        } else {
            echo "<script>
                alert('" . $cek_upload['message'] . "');
                document.location='admin.php?page=gallery';
            </script>";
            die;
        }
    }

    if (isset($_POST['ID'])) {
        //update data
        $ID = $_POST['ID'];

        if ($nama_gambar == '') {
            //jika tidak ganti gambar
            $Gambar = $_POST['gambar_lama'];
        } else {
            //jika ganti gambar, hapus gambar lama
            unlink("img/" . $_POST['gambar_lama']);
        }

        $stmt = $conn->prepare("UPDATE gallery 
                                SET 
                                -- judul =?,
                                -- isi =?,
                                Gambar = ?,
                                Tanggal = ?,
                                Username = ?
                                WHERE ID = ?");

        $stmt->bind_param("sssssi", $Gambar, $Tanggal, $Username, $ID);
        $simpan = $stmt->execute();
    } else {
		    //insert data
        $stmt = $conn->prepare("INSERT INTO gallery (Gambar,Tanggal,Username)
                                VALUES (?,?,?)");

        $stmt->bind_param("sss", $Gambar, $Tanggal, $username);
        $simpan = $stmt->execute();
    }

    if ($simpan) {
        echo "<script>
            alert('Simpan data sukses');
            document.location='admin.php?page=gallery';
        </script>";
    } else {
        echo "<script>
            alert('Simpan data gagal');
            document.location='admin.php?page=gallery';
        </script>";
    }

    $stmt->close();
    $conn->close();
}

//jika tombol hapus diklik
if (isset($_POST['hapus'])) {
    $ID = $_POST['ID'];
    $Gambar = $_POST['Gambar'];

    if ($Gambar != '') {
        //hapus file gambar
        unlink("img/" . $Gambar);
    }

    $stmt = $conn->prepare("DELETE FROM gallery WHERE ID =?");

    $stmt->bind_param("i", $ID);
    $hapus = $stmt->execute();

    if ($hapus) {
        echo "<script>
            alert('Hapus data sukses');
            document.location='admin.php?page=gallery';
        </script>";
    } else {
        echo "<script>
            alert('Hapus data gagal');
            document.location='admin.php?page=gallery';
        </script>";
    }

    $stmt->close();
    $conn->close();
}
?>