<?php
//load koneksi database
include '../../koneksi.php';

$nama_kategori_post = $_POST['nama_kategori_post'];

$insert = mysqli_query($koneksi, "INSERT INTO kategori VALUES (
    NULL,
    '$nama_kategori_post'
)");
// this file edited by Yaser Rayhan
if($insert){
    echo "<script>alert('Data Berhasil Ditambahkan');window.location.href='index.php';</script>";
}else{
echo "<script>alert('Data Gagal Ditambahkan');window.location.href='index.php';</script>";
}

?>