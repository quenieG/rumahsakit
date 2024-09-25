<?php 
// memangil file koneksi
include_once("../../function/koneksi.php");
 
// menangkap data id yang di kirim dari url
$id = $_GET['id_konsultasi'];
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM konsultasi WHERE id_konsultasi='$id'");
 
// mengalihkan halaman kembali ke index.php
echo '<script>window.location=history.go(-1);</script>';
//echo "<Center><h2><br>Berhasil<br>Surat Telah Dihapus</h2></center>
//<meta http-equiv='refresh' content='2;url=../admin/surat_masuk.php'>"; 
?>