<?php
$nim = $_GET['nim'];
require "./../database/connection.php";
$conn = connect();
$query = "SELECT * FROM actor WHERE nim='$nim' ";
$result = mysqli_query($conn, $query);

if (!$result) {
    echo mysqli_error($conn);
}

$data = mysqli_fetch_assoc($result);
require "./layout-admin/top.php";
?>
<main>
    <div class="container-fluid px-4">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="mt-4">Detail User</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row " style="padding-bottom: 4px;">
                            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nim" readonly required value="<?= $data['nim'] ?>">
                            </div>
                        </div>
                        <div class="form-group row" style="padding-bottom: 4px;">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control" id="nama" name="nama" readonly required value="<?= $data['nama'] ?>">
                            </div>
                        </div>
                        <div class="form-group row" style="padding-bottom: 4px;">
                            <label for="profesi" class="col-sm-2 col-form-label">Profesi</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control" id="profesi" name="profesi" readonly required value="<?= $data['password'] ?>">
                            </div>
                        </div>
                        <div class="form-group row" style="padding-bottom: 4px;">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" readonly class="form-control" id="password" name="password" readonly required value="<?= $data['password'] ?>">
                            </div>
                        </div>
                        <div class="form-group row" style="padding-bottom: 4px;">
                            <label for="level" class="col-sm-2 col-form-label">Level</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control" id="level" name="level" readonly required value="<?= $data['level'] ?>">
                            </div>
                        </div>
                        <div>
                            <a href="./user.php" class="btn btn-primary" type="submit">Kembali</a href="./user.php">
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

            </section>
            <!-- /.content -->
        </div>

    </div>
</main>
<?php
require "./layout-admin/footer.php";
require "./layout-admin/bottom.php";
?>