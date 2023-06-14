<?php
include '../../koneksi.php';
$judul = $_POST['judul'];
$isi = $_POST['isi'];

$update = mysqli_query($koneksi, "UPDATE tb_about SET judul = '$judul', isi = '$isi'");
// this file edited by Yaser Rayhan
if($update){
echo "<script>alert('Data Berhasil Diubah');window.location.href='index.php';</script>";
}else{
echo "<script>alert('Data Gagal Diubah');window.location.href='index.php';</script>";
}

?>