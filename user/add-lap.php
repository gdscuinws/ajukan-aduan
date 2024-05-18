<?php
// $id = $_POST['id'];
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$ruangan = $_POST['ruangan'];
$barang = $_POST['barang'];
$foto = $_FILES['foto']['name'];
$status = $_POST['status'];
$keterangan = $_POST['keterangan'];
$nim = $_POST['nim'];
require "./../database/connection.php";
$conn = connect();

// echo $foto;
// die;

$validation = "SELECT * FROM laporan WHERE tanggal = '$tanggal'";
$cek = mysqli_query($conn, $validation);
$matchFound = false;

foreach ($cek as $data) {
    if ($data['tanggal'] == $tanggal and $data['barang'] == $barang and $data['ruangan'] == $ruangan) {
        $matchFound = true;
        break;
    }
}

if ($foto != "") {
    $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $foto); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];   
    $nama_foto_baru = $foto;
    
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'gambar/'.$nama_foto_baru); //memindah file gambar ke folder gambar
        
        if ($matchFound) {
            $msg = "laporan sudah pernah dibuat user lain";
            header("Location: ./laporan.php?msg=$msg");
        } else {
            $query = mysqli_query($conn, "INSERT INTO `laporan`(`nama`, `tanggal`, `ruangan`, `barang`, `foto`, `status`, `keterangan`, `nim`) VALUES ('$nama','$tanggal','$ruangan','$barang','$foto','$status','$keterangan','$nim')");
        
            if ($query) {
                $msg = "laporan berhasil buat";
                header("Location: ./laporan.php?msg=$msg");
            } else {
                $msg = "laporan gagal dibuat" . mysqli_error($conn);
                header("Location: ./laporan.php?msg=$msg");
            }
        }
    } else {
        $msg = "Ekstensi gambar yang boleh hanya jpg atau png" . mysqli_error($conn);
        header("Location: ./laporan.php?msg=$msg");
    }
} else {

}

?>