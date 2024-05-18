<?php
$nim = $_GET['nim'];
$conn = mysqli_connect("localhost", "root", "", "aduan_invent");

$query = mysqli_query($conn, "DELETE FROM actor WHERE nim=$nim");
if ($query == 'true') {
    $msg = "user berhasil dihapus";
    header("Location: ./user.php?msg=$msg");
} else {
    $msg = "user gagal dihapus" . mysqli_error($conn);
    header("Location: ./user.php?msg=$msg");
}
?>
