<?php
    include_once("../../function/koneksi.php");
    // memangil file koneksi

    $id_dokter = $_POST['id_dokter'];
    $id_pasien = $_POST['id_pasien'];
    $kode = $_POST['kode'];
    $tanggal = $_POST['tanggal'];
    $status = $_POST['status'];

    $cekData= "SELECT * FROM checkup WHERE kode='$_POST[kode]'";
    $prosescek= mysqli_query($koneksi, $cekData);

    if (mysqli_num_rows($prosescek)>0) { //proses mengingatkan data sudah ada
        echo "<script>alert('DATA SUDAH TERSIMPAN DAN TIDAK DAPAT DISIMPAN KEMBALI, SILAHKAN HAPUS JIKA CHECK UP TELAH DILAKUKAN.');window.location=history.go(-2);</script>";
    }
    else { 
        $simpan =  $koneksi->query("INSERT INTO checkup (kode, id_dokter, id_pasien, tanggal, status) values
        ('$kode', '$id_dokter', '$id_pasien', '$tanggal', '$status')");
         echo "<script>alert('Data Berhasil Tersimpan.');window.location=history.go(-2);</script>";
    }

?>

<!-- pertama mendeklarasikan variabel kode untuk mengirim parameter yaitu kode kedalam database (dari kode sampai status)
    
cek data mendeklarasikan variabel cek data yang berisi perintah mysql untuk mendeklarasikan variabel kode sama dengan row kode di tabel konsultasi

proses cek mendeklarasikan proses cek untuk memanggil method msqli querry yang berisi parameter koneksi dan cek data untuk mengirim perintah query

 -->