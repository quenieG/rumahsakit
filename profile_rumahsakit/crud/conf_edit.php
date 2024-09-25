<?php
// memangil file koneksi
include_once("../../function/koneksi.php");

///mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['save'])){
 
 
 //jika tombol tambah benar di klik maka lanjut prosesnya
    $id = $_POST['id_konsultasi'];
    $kode = $_POST['kode'];
    $id_dokter = $_POST['id_dokter'];
    $id_pasien = $_POST['id_pasien'];
    $gejala = $_POST['gejala'];
    $status = $_POST['status'];
 
 //melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE konsultasi_id='$id' <- diambil dari inputan hidden id
    $update = "UPDATE konsultasi SET kode='$kode', id_dokter='$id_dokter', id_pasien='$id_pasien', gejala='$gejala', status='$status'";
    $update .= "WHERE id_konsultasi = '$id'";
    $result = mysqli_query($koneksi, $update);
    //jika query update sukses
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                         " - ".mysqli_error($koneksi));
  } else {
    echo '<script>window.location=history.go(-2);</script>';
  }

}   else{ //jika tidak terdeteksi tombol simpan di klik

    //redirect atau dikembalikan ke halaman edit
    echo '<script>window.location=history.go(-2);</script>';

}
?>