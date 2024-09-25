<?php 
// memangil file koneksi
include_once("../../function/koneksi.php");
 
// menangkap data id yang di kirim dari url
$id = $_GET['id_cek'];
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM checkup WHERE id_cek='$id'");
 
// mengalihkan halaman kembali ke index.php
echo '<script>window.location=history.go(-1);</script>';
//echo "<Center><h2><br>Berhasil<br>Surat Telah Dihapus</h2></center>
//<meta http-equiv='refresh' content='2;url=../admin/surat_masuk.php'>"; 
?>

<!-- pertama memanggil file koneksi

yang kedua mendeklarasikan variabel id untuk menmanggil row id cek menggunakan method get -->