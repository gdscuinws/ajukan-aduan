<?php
session_start();
if (!isset($_SESSION['actor'])) {
    $msg = "Anda tidak berhak akses";
    header("Location: ../index.php?msg=$msg");
} else if ($_SESSION['level'] != 1) {
    $msg = "Anda tidak berhak akses";
    echo $msg;
    header("Location: ../index.php?msg=$msg");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../assets/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../assets/js/Chart.js"></script>
</head>

<body class="sb-nav-fixed">
    <?php
    require "header.php";
    ?>
    <div id="layoutSidenav">
        <?php
        require "side-nav.php";
        ?>
        <div id="layoutSidenav_content">
            <!-- main content -->