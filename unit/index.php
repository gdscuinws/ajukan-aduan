<?php
require "./layout-unit/top.php";
$conn = mysqli_connect("localhost", "root", "", "aduan_invent");
$query = "SELECT * FROM laporan";
$result = mysqli_query($conn, $query);

if (!$result) {
    echo mysqli_error($conn);
}
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Daftar Laporan Kerusakan </h1>
        <section class="section">
            <div class="row">
                <div class="col-12">    
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped w-100" id="table-1">
                                    <thead>
                                        <tr>
                                            <th>Id Laporan</th>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Ruangan</th>
                                            <th>Nama Barang</th>
                                            <th>Foto Barang</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tbody>
                                        <?php $id = 1; ?>
                                        <?php foreach ($result as $data) : ?>
                                            <tr>
                                                <td><?= $data['id'] ?></td>
                                                <td><?= $data['nama'] ?></td>
                                                <td><?= $data['tanggal'] ?></td>
                                                <td><?= $data['ruangan'] ?></td>
                                                <td><?= $data['barang'] ?></td>
                                                <td><img src="../user/gambar/<?php echo $data['foto']; ?>"></td>
                                                <td><?= $data['keterangan'] ?></td>
                                                <td>
                                                    <?php
                                                    if ($data['status'] == "Belum Diperbaiki") {
                                                    ?>
                                                        <span class="badge rounded-pill bg-danger text-white"><?= $data['status'] ?></span>
                                                    <?php
                                                    } else if ($data['status'] == "Sedang Diperbaiki") {
                                                    ?>
                                                        <span class="badge rounded-pill bg-warning text-white"><?= $data['status'] ?></span>
                                                    <?php
                                                    } else if ($data['status'] == "Sudah Diperbaiki") {
                                                    ?>
                                                        <span class="badge rounded-pill bg-success text-white"><?= $data['status'] ?></span>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <a href="ubah-status.php?id=<?=$data["id"]?>" class="btn btn-warning">Ubah Status</a>
                                                </td>
                                            </tr>
                                            <?php $id++ ?>
                                        <?php endforeach ?>
                                    </tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</main>
<?php
require "./layout-unit/footer.php";
require "./layout-unit/bottom.php";
?>