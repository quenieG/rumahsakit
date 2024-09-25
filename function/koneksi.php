<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "rumahsakit1";

    $koneksi = mysqli_connect($server, $username, $password, $database) or die("koneksi ke database gagal");

    // halaman untuk mengkoneksikan loclhost ke database