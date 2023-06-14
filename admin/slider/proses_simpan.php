<?php
//load koneksi database

use function PHPSTORM_META\map;

include '../../koneksi.php';

$namaSlider = $_POST['nama_slider'];

$nama_file = $_FILES['gambar_post']['name'];
$source = $_FILES['gambar_post']['tmp_name'];
$folder = '../../gambarSlider/';
$namaFile= uniqid().$nama_file;
move_uploaded_file($source, $folder.$namaFile);
// this file edited by Yaser Rayhan
$insert = mysqli_query($koneksi, "INSERT INTO tb_slider VALUES (
    NULL,
    '$namaSlider',
    '$namaFile'
)");
if($insert){
    echo "<script>alert('Data Berhasil Ditambahkan');window.location.href='index.php';</script>";
}else{
echo "<script>alert('Data Gagal Ditambahkan');window.location.href='index.php';</script>";
}

?>