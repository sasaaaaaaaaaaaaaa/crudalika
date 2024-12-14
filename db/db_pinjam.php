<?php
$proses = $_GET['proses'];
include "../koneksi.php";
session_start();
// include "../library/lib_login.php";
// if(cek_login()){
//   header("location:login.php");

if ($proses == 'insert') {
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
   
    mysqli_query($koneksi,"INSERT INTO pinjam SET tanggal_pinjam='$tanggal_pinjam' ");
} else if ($proses == 'update') {
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
    
    mysqli_query($koneksi, "UPDATE pinjam SET tanggal_pinjam='$tanggal_pinjam',");
} else if ($proses == 'hapus') {
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
    $id_pinjam      = $_GET['id_pinjam'];


    mysqli_query($koneksi, "DELETE FROM pinjam WHERE id_pinjam='$id_pinjam'");
}

header("location:../index.php?halaman=pinjam");
// }
// else{
//     header("location:../login.php");
// }