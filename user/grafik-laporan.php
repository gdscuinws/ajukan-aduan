<?php
require "./layout-user/top.php";
require "./../database/connection.php";
$conn = connect();
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Grafik Laporan</h1>
        <div class="card-body" style="width: 800px;margin: 0px auto;">
            <canvas id="myChart"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myChart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Kursi", "Meja", "AC", "Proyektor", "Lampu", "Lainnya"],
                    datasets: [{
                        label: "Jumlah",
                        data: [
                            <?php
                            $jumlah_kursi = mysqli_query($conn, "SELECT * FROM laporan WHERE barang='Kursi'");
                            echo mysqli_num_rows($jumlah_kursi);
                            ?>,
                            <?php
                            $jumlah_meja = mysqli_query($conn, "SELECT * FROM laporan WHERE barang='Meja'");
                            echo mysqli_num_rows($jumlah_meja);
                            ?>,
                            <?php
                            $jumlah_AC = mysqli_query($conn, "SELECT * FROM laporan WHERE barang='AC'");
                            echo mysqli_num_rows($jumlah_AC);
                            ?>,
                            <?php
                            $jumlah_proyektor = mysqli_query($conn, "SELECT * FROM laporan WHERE barang='Proyektor'");
                            echo mysqli_num_rows($jumlah_proyektor);
                            ?>,
                            <?php
                            $jumlah_lampu = mysqli_query($conn, "SELECT * FROM laporan WHERE barang='Lampu'");
                            echo mysqli_num_rows($jumlah_lampu);
                            ?>,
                            <?php
                            $jumlah_lainnya = mysqli_query($conn, "SELECT * FROM laporan WHERE barang='Lainnya'");
                            echo mysqli_num_rows($jumlah_lainnya);
                            ?>,
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.4)',
                            'rgba(54, 162, 235, 0.4)',
                            'rgba(255, 206, 86, 0.4)',
                            'rgb(195, 237, 192, 0.4)',
                            'rgb(164, 144, 124, 0.4)',
                            'rgb(173, 196, 206, 0.4)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgb(170, 200, 167, 1)',
                            'rgb(141, 123, 104, 1)',
                            'rgb(150, 182, 197, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>
    </div>
</main>
<?php
require "./layout-user/footer.php";
require "./layout-user/bottom.php";
?>