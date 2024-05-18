<?php
$status = $_POST['status'];
$id = $_POST['id'];
$conn = mysqli_connect("localhost", "root", "", "aduan_invent");

$query = mysqli_query($conn, "UPDATE laporan SET status = '$status' WHERE id = '$id'");
if ($query == 'true') {
    $msg = "status berhasil diubah";
    header("Location: ./index.php?msg=$msg");
} else {
    $msg = "gagal merubah status" . mysqli_error($conn);
    header("Location: ./index.php?msg=$msg");
}
