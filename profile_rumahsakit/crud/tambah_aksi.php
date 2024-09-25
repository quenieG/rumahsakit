<?php 
// memangil file koneksi
include_once("../../function/koneksi.php");

$len = isset($cOTLdata['char_data']) ? count($cOTLdata['char_data']) : 0;

if(isset($_GET['cari3'])){
    $cari3 =$_GET['cari3'];
    $query7 ="select *from jadwal
    where id
    like '%".$cari3."%'
    ";

    // lakukan pengecekkan untuk mengecek dengan isset apakah variabel get bernilai true atau false, jika true lalu mendeklarasikan variabel cari 3 yang brisi nilai get cari 3, lalu mendeklarasikan variable query 7 yang bernilai perintah mysql untuk mencari  id di tabel jadwal


    $data =mysqli_query($koneksi,$query7);
    // data mendeklarasikan data untuk memanggil method msqli querry yang berisi parameter koneksi dan data untuk mengirim perintah query

    $cek =mysqli_num_rows($data);
    // mendeklarasikan variabel cek yang berisi method mysqli_num_rows yang berisi parameter variabel data untuk mengecek data tersaji atau tidak

    if($cek>0){
          echo "Data ditemukan";
          // jika ya data ditemukan
      }else{
          echo "data tidak ditemukan";
          // dan jika tidak data tidak ditemukan
      }
    }

    $no = 1;
    while($d = mysqli_fetch_array($data)){
      // lalu menggunakan looping while dengan mendeklarasikan variabel d untuk menampung data yang dipanggil dati method mysqli_fetch_array
}
 
// menangkap data yang di kirim dari form
$id_dokter = $d['id_dokter'];
$id_pasien = $d['id_pasien'];
$gejala = $_POST['gejala'];
$status = $_POST['status'];

// menginput data ke database
mysqli_query($koneksi,"insert into dokter (id_dokter, id_pasien, gejala, status)
                                values('$id_dokter', '$id_pasien', '$gejala','$status')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php?page=profile_rumahsakit/konsultasi");
 
?>
