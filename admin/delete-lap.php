<?php
$id = $_GET['id'];
require "./../database/connection.php";
$conn = connect();

$query = mysqli_query($conn, "DELETE FROM laporan WHERE id=$id");
if ($query == 'true') {
    $msg = "data berhasil dihaapus";
    header("Location: ./index.php?msg=$msg");
} else {
    $msg = "data gagal" . mysqli_error($conn);
    header("Location: ./index.php?msg=$msg");
}
