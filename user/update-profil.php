<?php
session_start();
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$profesi = $_POST['profesi'];
$password = $_POST['password'];
$level = $_POST['level'];
// var_dump($nim, $nama, $profesi, $password, $level);
// die;
require "./../database/connection.php";
$conn = connect();

$query = mysqli_query($conn, "UPDATE `actor` SET `nama`='$nama',`profesi`='$profesi',`password`='$password' WHERE nim= $nim");
if ($query == 'true') {
    $query = mysqli_query($conn, "SELECT * FROM actor WHERE nim = '$nim'");
    $data = mysqli_fetch_assoc($query);
    $_SESSION['actor'] = $data;
    // var_dump($nama, $profesi, $password);
    // die;
    $msg = "profil berhasil dirubah";
    header("Location: ./profil.php?msg=$msg");
} else {
    $msg = "profil gagal diubah" . mysqli_error($conn);
    header("Location: ./profil.php?msg=$msg");
}
