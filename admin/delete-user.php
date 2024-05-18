<?php
$nim = $_GET['nim'];
require "./../database/connection.php";
$conn = connect();

$query = mysqli_query($conn, "DELETE FROM actor WHERE nim=$nim");
if ($query == 'true') {
    $msg = "user berhasil dihapus";
    header("Location: ./user.php?msg=$msg");
} else {
    $msg = "user gagal dihapus" . mysqli_error($conn);
    header("Location: ./user.php?msg=$msg");
}
?>
