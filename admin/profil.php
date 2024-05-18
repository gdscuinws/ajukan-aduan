<?php
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
                            <h1 class="mt-4">Profil Akun</h1>
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
                            <label for="id" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama">
                            </div>
                        </div>
                        <div class="form-group row" style="padding-bottom: 4px;">
                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control" id="username">
                            </div>
                        </div>
                        <div class="form-group row" style="padding-bottom: 4px;">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control" id="password">
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary" type="submit">ubah</button>
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