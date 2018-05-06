<?php 
include "koneksi.php";
$nomor = $_GET['nomor'];
$delete = mysqli_query($koneksi,"DELETE FROM pegawai WHERE nomor='$nomor'");
if(delete){
header("location:pegawai.php");}
?>