<?php
$proses = $_GET['proses'];
include "../koneksi.php";
session_start();
// include "../library/lib_login.php";
// if(cek_login()){
//   header("location:login.php");

if ($proses == 'insert') {
    $keterangan = $_POST['keterangan'];
    $nominal        = $_POST['nominal'];
    
    mysqli_query($koneksi, "INSERT INTO denda SET 
    keterangan='$keterangan',nominal='$nominal'");
} else if ($proses == 'update') {
    $keterangan     = $_POST['keterangan'];
    $nominal        = $_POST['nominal'];
    $id_denda       = $_GET['id_denda'];

    mysqli_query($koneksi, "INSERT INTO denda SET
     keterangan='$keterangan',nominal='$nominal'");
} else if ($proses == 'hapus') {
    $keterangan = $_POST['keterangan'];
    $nominal    = $_POST['nominal'];
     $id_denda       = $_GET['id_denda'];


    mysqli_query($koneksi, "DELETE FROM denda WHERE id_denda='$id_denda'");
}

header("location:../index.php?halaman=denda");
// }
// else{
//     header("location:../login.php");
// }