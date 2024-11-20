<?php
$server = "localhost";
$user_db="root";
$pass_db="";
$db_name="crudalika";
$koneksi=mysqli_connect("localhost","root","","crudalika");

if(mysqli_connect_error()){
    echo "koneksi gagal:".mysqli_connect_error();
}