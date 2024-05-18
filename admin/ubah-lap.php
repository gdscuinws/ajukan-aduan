<?php
require "./layout-admin/top.php";
$id = $_GET['id'];
$conn = mysqli_connect("localhost", "root", "", "aduan_invent");
$query = "SELECT * FROM laporan WHERE id='$id' ";
$result = mysqli_query($conn, $query);

if (!$result) {
    echo mysqli_error($conn);
}

$data = mysqli_fetch_assoc($result);
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Ubah Laporan Kerusakan </h1>
        <form action="./update-lap.php" method="post">
            <div class="mb-3">
                <label for="id" class="form-label">Id Laporan</label>
                <input type="text" class="form-control" id="id" name="id" required value="<?= $data['id'] ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required value="<?= $data['nama'] ?>">
            </div>
            <div class="mb-3">
                <label for="ruangan" class="form-label">Ruangan</label>
                <input type="text" class="form-control" id="ruangan" name="ruangan" required value="<?= $data['ruangan'] ?>">
            </div>
            <div class="mb-3">
                <label for="barang" class="form-label">Nama Barang</label>
                <select class="form-select" id="barang" name="barang">
                    <option value="">Pilih Barang</option>
                    <option value="Kursi" <?php if ($data['barang'] == "Kursi") {
                                                echo "selected";
                                            } ?>>Kursi</option>
                    <option value="Meja" <?php if ($data['barang'] == "Meja") {
                                                echo "selected";
                                            } ?>>Meja</option>
                    <option value="AC" <?php if ($data['barang'] == "AC") {
                                            echo "selected";
                                        } ?>>AC</option>
                    <option value="Proyektor" <?php if ($data['barang'] == "Proyektor") {
                                                    echo "selected";
                                                } ?>>Proyektor</option>
                    <option value="Lampu" <?php if ($data['barang'] == "Lampu") {
                                                echo "selected";
                                            } ?>>Lampu</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status" required value="<?= $data['status'] ?>">
                    <option value="Belum Diperbaiki" <?php if ($data['status'] == "Belum Diperbaiki") {
                                                            echo "selected";
                                                        } ?>>Belum Diperbaiki</option>
                    <option value="Sedang Diperbaiki" <?php if ($data['status'] == "Sedang Diperbaiki") {
                                                            echo "selected";
                                                        } ?>>Sedang Diperbaiki</option>
                    <option value="Sudah Diperbaiki" <?php if ($data['status'] == "Sudah Diperbaiki") {
                                                            echo "selected";
                                                        } ?>>Sudah Diperbaiki</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" required value="<?= $data['nim'] ?>" readonly>
            </div>
            <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="submit" name="ubah-lap">Ubah</button>
            </div>
        </form>
    </div>
</main>
<?php
require "./layout-admin/footer.php";
require "./layout-admin/bottom.php";
?>