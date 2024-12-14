<?php
$proses=$_GET['proses'];
include "../koneksi.php";
session_start();
// include "../library/lib_login.php";
// if(cek_login()){
//   header("location:login.php");

if($proses=='insert'){
    $nama       =$_POST['nama'];
    $alamat     =$_POST['alamat'];
    $telepon    =$_POST['telepon'];
    $usernama   =$_POST['username'];
    $password   =md5($_POST['password']);
    $level=$_POST['level'];

    mysqli_query($koneksi,"INSERT INTO anggota SET nama='$nama',
    alamat='$alamat',telepon='$telepon',username='$username',password='$password',level='$level'");
}else if($proses=='update'){
    $nama       =$_POST['nama'];
    $alamat     =$_POST['alamat'];
    $telepon    =$_POST['telepon'];
    $usernam    =$_POST['username'];
    $password   =md5($_POST['password']);
    $level      =$_POST['level'];
  $id_anggota   = $_POST['id_anggota'];

  mysqli_query($koneksi,"INSERT INTO anggota SET nama='$nama',alamat='$alamat',
 telepon='$telepon', username='$username',password='$password',level='$level'");
}else if($proses=='hapus'){
$id_anggota     = $_GET['id_anggota'];


    mysqli_query($koneksi,"DELETE FROM anggota WHERE id_anggota='$id_anggota'");
}

header("location:../index.php?halaman=anggota");
// }
// else{
//     header("location:../login.php");
// }