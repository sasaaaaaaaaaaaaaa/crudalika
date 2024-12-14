<?php
$proses = $_GET['proses'];
include "../koneksi.php";
session_start();
// include "../library/lib_login.php";
// if(cek_login()){
//   header("location:login.php");

if ($proses == 'insert') {
    $nama_kategori = $_POST['nama_kategori'];
    
    mysqli_query($koneksi, "INSERT INTO kategori SET nama_kategori='$nama_kategori' ");
} else if ($proses == 'update') {
    $nama_kategori = $_POST['nama_kategori'];
    

    mysqli_query($koneksi, "INSERT INTO kategori SET nama_kategori='$nama_kategori'");
} else if ($proses == 'hapus') {
    $nama_kategori = $_POST['nama_kategori'];
    $id_kategori = $_GET['id_kategori'];


    mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori='$id_kategori'");
}

header("location:../index.php?halaman=kategori");
// }
// else{
//     header("location:../login.php");
// }