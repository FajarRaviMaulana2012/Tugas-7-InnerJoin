<?php
$host       = "localhost";
$username   = "root";
$password   = "";
$database   = "fajar_311810757";

$sekarang = date("d-m-Y H:i:s");

$koneksi = mysqli_connect($host,$username,$password,$database);

if(mysqli_connect_error($koneksi)){
     
    echo "Gagal tersambung ke dalam database " . mysqli_connect_error();
    
}
?>