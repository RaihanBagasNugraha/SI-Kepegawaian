<?php
include "koneksi.php";
$nama = $_POST['nama'];
$nip = $_POST['nip'];
$tgl_lahir = $_POST['tgl_lahir'];
$divisi = $_POST['divisi'];
$input = mysqli_query($koneksi, "INSERT INTO pegawai (nama, nip, tgl_lahir, divisi) VALUES('$nama','$nip','$tgl_lahir','$divisi')");
if($input){
header("location:pegawai.php");
}
else{
header("location:tambah_data.php");
}
?>
