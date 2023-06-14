<?php
//load koneksi database

use function PHPSTORM_META\map;

include '../../koneksi.php';

$nama_barang_post = $_POST['nama_barang_post'];
$deskripsi_post = $_POST['deskripsi_post'];
$harga_post = $_POST['harga_post'];
$kategori_post = $_POST['kategori_post'];
$nama_file = $_FILES['gambar_post']['name'];
$source = $_FILES['gambar_post']['tmp_name'];
$folder = './gambar/';
$namaFile= uniqid().$nama_file;
move_uploaded_file($source, $folder.$namaFile);
// this file edited by Yaser Rayhan
$insert = mysqli_query($koneksi, "INSERT INTO data_barang VALUES (
    NULL,
    '$nama_barang_post',
    '$deskripsi_post',
    '$harga_post',
    '$namaFile',
    '$kategori_post'
)");
if($insert){
    echo "<script>alert('Data Berhasil Ditambahkan');window.location.href='index.php';</script>";
}else{
echo "<script>alert('Data Gagal Ditambahkan');window.location.href='index.php';</script>";
}

?>