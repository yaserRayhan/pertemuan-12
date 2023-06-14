<?php
include '../../koneksi.php';
$id = $_POST['id'];
$namaSosmed = $_POST['nama_slider'];

$nama_file = $_FILES['gambar_post']['name'];
$source = $_FILES['gambar_post']['tmp_name'];
$folder = '../../gambarSlider/';
$namaFile= uniqid().$nama_file;
move_uploaded_file($source, $folder.$namaFile);
// this file edited by Yaser Rayhan
$update = mysqli_query($koneksi, "UPDATE tb_slider SET
nama_slider = '$namaSosmed',
gambar = '$namaFile'
WHERE id = '$id'");

if($update){
echo "<script>alert('Data Berhasil Diubah');window.location.href='index.php';</script>";
}else{
echo "<script>alert('Data Gagal Diubah');window.location.href='index.php';</script>";
}

?>