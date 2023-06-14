<?php
include '../../koneksi.php';
$id = $_POST['id'];
$nama_kategori_post = $_POST['nama_kategori_post'];

$update = mysqli_query($koneksi, "UPDATE kategori SET nama_kategori = '$nama_kategori_post' WHERE id = '$id'");
// this file edited by Yaser Rayhan
if($update){
echo "<script>alert('Data Berhasil Diubah');window.location.href='index.php';</script>";
}else{
echo "<script>alert('Data Gagal Diubah');window.location.href='index.php';</script>";
}

?>