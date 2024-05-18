<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2023</div>
            <script>
                // Ambil nilai pesan dari parameter GET "msg"
                var msg = "<?php if (isset($_GET['msg'])) echo $_GET['msg']; ?>";

                // Periksa apakah pesan tidak kosong
                if (msg !== "") {
                    // Tampilkan pesan dalam pop-up alert
                    window.alert(msg);
                }
            </script>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>