<?php
require "./../database/connection.php";
$conn = connect();
if (isset($_POST['ubah-lap'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $ruangan = $_POST['ruangan'];
    $barang = $_POST['barang'];
    $status = $_POST['status'];
    $nim = $_POST['nim'];
    // var_dump($id, $nama, $ruangan, $barang, $status, $nim);
    // die;

    $query = "UPDATE `laporan` SET `nama`='$nama',`ruangan`='$ruangan',`barang`='$barang',`status`='$status' WHERE id= '$id'";
    if (mysqli_query($conn, $query)) {
        $msg = "laporan berhasil diudah";
        header("Location: ./index.php?msg=$msg");
    } else {
        $msg = "laporan gagal diubah" . mysqli_error($conn);
        header("Location: ./index.php?msg=$msg");
    }
}
