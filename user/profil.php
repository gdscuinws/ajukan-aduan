<?php
require "./layout-user/top.php";
require "./../database/connection.php";
$conn = connect();
?>

<main>
    <div class="container-fluid px-4">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="mt-4">Profil Akun</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <form action="./update-profil.php" method="post">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row " style="padding-bottom: 4px;">
                                <label for="id" class="col-sm-2 col-form-label">NIM</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nim" name="nim" required value="<?= $_SESSION['actor']['nim'] ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row" style="padding-bottom: 4px;">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" name="nama" required value="<?= $_SESSION['actor']['nama'] ?>">
                                </div>
                            </div>
                            <div class="form-group row" style="padding-bottom: 4px;">
                                <label for="profesi" class="col-sm-2 col-form-label">Profesi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="profesi" name="profesi" required value="<?= $_SESSION['actor']['profesi'] ?>">
                                </div>
                            </div>
                            <div class="form-group row" style="padding-bottom: 4px;">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="password" name="password" required value="<?= $_SESSION['actor']['password'] ?>">
                                </div>
                            </div>
                            <div class="form-group row" style="padding-bottom: 4px;">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="level" name="level" required value="<?= $_SESSION['actor']['level'] ?>" hidden>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-primary" type="submit" name="submit_profil">ubah</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /.card-body -->

            </section>
            <!-- /.content -->
        </div>

    </div>
</main>
<?php
require "./layout-user/footer.php";
require "./layout-user/bottom.php";
?>