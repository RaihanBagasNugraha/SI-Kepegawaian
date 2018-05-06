<?php
include "koneksi.php";
$nomor = $_POST['nomor'];
$nama = $_POST['nama'];
$nip = $_POST['nip'];
$tgl_lahir = $_POST['tgl_lahir'];
$divisi = $_POST['divisi'];

$input = mysqli_query($koneksi, "UPDATE pegawai SET
nama='$nama',nip='$nip',tgl_lahir='$tgl_lahir',divisi='$divisi' WHERE nomor = '$nomor'");
if(edit){
	header("location:pegawai.php");
}
?>