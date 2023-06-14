<?php
//load koneksi database

use function PHPSTORM_META\map;

include '../../koneksi.php';

$nama_sosmed = $_POST['nama_sosmed'];

$nama_file = $_FILES['gambar_post']['name'];
$source = $_FILES['gambar_post']['tmp_name'];
$folder = '../../gambarSocial/';
$namaFile= uniqid().$nama_file;
move_uploaded_file($source, $folder.$namaFile);
// this file edited by Yaser Rayhan
$insert = mysqli_query($koneksi, "INSERT INTO tb_social VALUES (
    NULL,
    '$nama_sosmed',
    '$namaFile'
)");
if($insert){
    echo "<script>alert('Data Berhasil Ditambahkan');window.location.href='index.php';</script>";
}else{
echo "<script>alert('Data Gagal Ditambahkan');window.location.href='index.php';</script>";
}

?>