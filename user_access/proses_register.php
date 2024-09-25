<?php

    include_once("../function/koneksi.php");
    include_once("../function/helper.php");
       // memanggi file koneksi

    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $no_hp = $_POST['no_hp'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];
// pertama mendeklarasikan variabel kode untuk mengirim parameter yaitu kode kedalam database (dari nama_lengkap sampai re_password)

    unset($_POST['password']);
    unset($_POST['re_password']);
    // lalu memanggil method unset yang berisi nilai post password untuk menghilangkan return type

    $dataFrom = http_build_query($_POST);
    echo "SELECT * FROM `account` WHERE email='$email'";
    // memanggil variabel email yang berisi row email di tabel akun

    $query = mysqli_query($koneksi, "SELECT * FROM `account` WHERE email='$email'");
    // mendeklarasikan variabel query yang berisi perintah mysqli_querry yang menyimpan parameter file koneksi dan perintah method di tabel akun

    // echo mysqli_num_rows($query); 

    if(empty($nama_lengkap) || empty($email) || empty($no_hp) || empty($username) || empty($password)) {
        header("location:".BASE_URL."index.php?page=user_access/register&notif=require&$dataFrom");
        // jika nama lengkap, email, no hp, username, password sama dengan empty maka akan menuju halaman ini

    } elseif($password != $re_password) {
        header("location:".BASE_URL."index.php?page=user_access/register&notif=password&$dataFrom");
        // jika password tidak sama dengan re_password maka menuju ke halaman ini
    } elseif(mysqli_num_rows($query) == 1) {
        header("location:".BASE_URL."index.php?page=user_access/register&notif=email&$dataFrom");
        // jika data database sudah ada maka akan menuju halaman ini
    } else {
        $password = md5($password);
        mysqli_query($koneksi, "INSERT INTO  account (nama_lengkap, email, username, no_hp, password)
                                        VALUES ('$nama_lengkap', '$email', '$username', '$no_hp', '$password')");
        // jika password sama dengan password maka akan mengirim nama lengkap, email, username, no hp, password ke database 
        header("location:".BASE_URL."index.php?page=user_access/login");
        // lalu akan menuju kehalaman login
    };

//  pertama mendeklarasikan variabel kode untuk mengirim parameter yaitu kode kedalam database (dari kode sampai status)
    