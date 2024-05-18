<?php
require "./layout-admin/top.php";
require "./../database/connection.php";
$conn = connect();
$query = "SELECT * FROM actor";
$result = mysqli_query($conn, $query);

if (!$result) {
    echo mysqli_error($conn);
}
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Daftar User </h1>
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped w-100" id="table-1">
                                    <thead>
                                        <tr>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Profesi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $angka = 1; ?>
                                        <?php foreach ($result as $data) : ?>
                                            <tr>
                                                <td><?= $data['nim'] ?></td>
                                                <td><?= $data['nama'] ?></td>
                                                <td><?= $data['profesi'] ?></td>
                                                <td>
                                                    <a href="detail-user.php?nim=<?= $data["nim"] ?>" class="btn btn-warning">Detail</a>
                                                    <a href="delete-user.php?nim=<?= $data["nim"] ?>" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <?php $angka++ ?>
                                        <?php endforeach ?>
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
require "./layout-admin/footer.php";
require "./layout-admin/bottom.php";
?>