<?php
$proses = $_GET['proses'];
include "../koneksi.php";
session_start();
// include "../library/lib_login.php";
// if(cek_login()){
//   header("location:login.php");

if ($proses == 'insert') {
    $nama     = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $foto=$_FILES['foto']['name'];
    $file_tmp=$_FILES['foto']['tmp_name'];
    move_uploaded_file($file_tmp,'../foto/fotouser/'.$foto);


    mysqli_query($koneksi, "INSERT INTO petugas SET nama='$nama',
    username='$username',password='$password',foto='$foto'");
} else if ($proses == 'update') {
    $nama       = $_POST['nama'];
    $username   = $_POST['username'];
    $id_petugas = $_POST['id_petugas'];
    $foto=$_FILES['foto']['name'];
    $file_tmp=$_FILES['foto']['tmp_name'];
    move_uploaded_file($file_tmp,'../foto/fotouser/'.$foto);

$queryshow="SELECT*FROM admin WHERE id_petugas='$id';";
$sqlshow=mysqli_query($koneksi,$queryshow);
$result=mysqli_fetch_assoc($sqlshow);
if($_FILES['foto']['name']==""){
    $fotoshow=$_FILES['foto']['name'];
    unlink("foto/".$result['foto']);
    move_uploaded_file($_FILES['foto']['tmp_name'],'foto/'.$_FILES['foto']['name']);
};

    mysqli_query($koneksi, "UPDATE petugas SET nama='$nama',
  username='$username' WHERE id_petugas='$id_petugas' ");
} else if ($proses == 'hapus') {
    $id_petugas = $_GET['id_petugas'];


    mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas='$id_petugas'");
}

header("location:../index.php?halaman=petugas");
// }
// else{
//     header("location:../login.php");
// }