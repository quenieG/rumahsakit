<?php

    include_once("../function/koneksi.php");
    include_once("../function/helper.php");
    // koneksi database

    $id_dokter = $_POST['id_dokter'];
    $id_pasien = $_POST['id_pasien'];
    $hari = $_POST['hari'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];
    // <!-- pertama mendeklarasikan variabel kode untuk mengirim parameter yaitu kode kedalam database (dari id dokter sampai waktu)

$query = "INSERT INTO jadwal (id_dokter, user_id, hari, tanggal, waktu) VALUES('$id_dokter', '$id_pasien', '$hari', '$tanggal', '$waktu')";
// mendeklarasikan variabel query yang berisi nilai perintah mysql untuk menambahkan data id dokter, user id, hari, tanggal, waktu ke tabel jadwal
 

        $result = mysqli_multi_query($koneksi, $query);
        

        header("location:".BASE_URL."index.php?page=profile_rumahsakit/konsultasi");

// <!-- pertama mendeklarasikan variabel kode untuk mengirim parameter yaitu kode kedalam database (dari kode sampai status)
    


 