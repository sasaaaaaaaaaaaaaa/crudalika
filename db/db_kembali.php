<?php
$proses = $_GET['proses'];
include "../koneksi.php";
session_start();
// include "../library/lib_login.php";
// if(cek_login()){
//   header("location:login.php");

if ($proses == 'insert') {
    $tanggal_kembali = $_POST['tanggal_kembali'];
    $denda = $_POST['denda'];
    
    mysqli_query($koneksi, "INSERT INTO kembali SET tanggal_kembali='$tanggal_kembali',denda='$denda'");
} else if ($proses == 'update') {
    $tanggal_kembali = $_POST['tanggal_kembali'];
    $denda = $_POST['denda'];

    mysqli_query($koneksi, "INSERT INTO kembali SET tanggal_kembali='$tanggal_kembali',denda='$denda'");
} else if ($proses == 'hapus') {
    $tanggal_kembali = $_POST['tanggal_kembali'];
    $denda = $_POST['denda'];
    $id_kembali = $_GET['id_kembali'];


    mysqli_query($koneksi, "DELETE FROM kembali WHERE id_kembali='$id_kembali'");
}

header("location:../index.php?halaman=kembali");
// }
// else{
//     header("location:../login.php");
// }