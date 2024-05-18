<?php
require "./layout-unit/top.php";
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
        <h1 class="mt-4"> Ubah Status Laporan </h1>
        <form action="./update-status.php" method="post">
            <div class="mb-3">
                <label for="id" class="form-label">Id Laporan</label>
                <input type="text" name="id" class="form-control" id="id" required value="<?= $data['id'] ?>" readonly>
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
            <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="submit" name="ubah-status">Ubah</button>
            </div>
        </form>
    </div>
</main>
<?php
require "./layout-unit/footer.php";
require "./layout-unit/bottom.php";
?>