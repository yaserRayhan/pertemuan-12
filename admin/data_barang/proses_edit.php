<?php
include '../../koneksi.php';
$id = $_POST['id'];
$nama_barang_post = $_POST['nama_barang_post'];
$deskripsi_post = $_POST['deskripsi_post'];
$harga_post = $_POST['harga_post'];
$id_kategori = $_POST['kategori_post'];

$nama_file = $_FILES['gambar_post']['name'];
$source = $_FILES['gambar_post']['tmp_name'];
$folder = './gambar/';
$namaFile= uniqid().$nama_file;
move_uploaded_file($source, $folder.$namaFile);
// this file edited by Yaser Rayhan
$update = mysqli_query($koneksi, "UPDATE data_barang SET
nama_barang = '$nama_barang_post',
deskripsi = '$deskripsi_post',
harga = '$harga_post',
gambar = '$namaFile',
id_kategori = '$id_kategori'
WHERE id = '$id'");
if($update){
echo "<script>alert('Data Berhasil Diubah');window.location.href='index.php';</script>";
}else{
echo "<script>alert('Data Gagal Diubah');window.location.href='index.php';</script>";
}

?>