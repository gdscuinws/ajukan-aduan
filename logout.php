<?php 
    session_start();
    session_unset();
    session_destroy();
    $msg = "Anda Telah Logout";
    header("Location: index.php?msg=$msg");
?>