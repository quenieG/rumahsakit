<?php
    include_once("../../function/koneksi.php");
    // memanggi file koneksi

    $kode = $_POST['kode'];
    $id_jadwal = $_POST['id_jadwal'];
    $id_dokter = $_POST['id_dokter'];
    $id_pasien = $_POST['id_pasien'];
    $gejala = $_POST['gejala'];
    $status = $_POST['status'];
    // <!-- pertama mendeklarasikan variabel kode untuk mengirim parameter yaitu kode kedalam database (dari kode sampai status)

    $cekData= "SELECT * FROM konsultasi WHERE kode='$_POST[kode]'";
    // cek data mendeklarasikan variabel cek data yang berisi perintah mysql untuk mendeklarasikan variabel kode sama dengan row kode di tabel konsultasi

    $prosescek= mysqli_query($koneksi, $cekData);
    // proses cek mendeklarasikan proses cek untuk memanggil method msqli querry yang berisi parameter koneksi dan cek data untuk mengirim perintah query

    if (mysqli_num_rows($prosescek)>0) { //proses mengingatkan data sudah ada
        echo "<script>alert('DATA SUDAH TERSIMPAN DAN TIDAK DAPAT DISIMPAN KEMBALI, SILAHKAN HAPUS JIKA CHECK UP TELAH DILAKUKAN.');window.location=history.go(-2);</script>";
    }
    else { 
        $simpan =  $koneksi->query("INSERT INTO konsultasi (id_jadwal, kode, id_dokter, id_pasien, gejala, status) values
        ('$id_jadwal', '$kode', '$id_dokter', '$id_pasien', '$gejala', '$status')");
         echo "<script>alert('Data Berhasil Tersimpan.');window.location=history.go(-2);</script>";
    }

?>

