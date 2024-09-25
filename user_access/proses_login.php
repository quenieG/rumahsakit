<?php

	include_once("../function/koneksi.php");
	include_once("../function/helper.php");
	// memanggil file koneksi
	
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	// mendeklarasikan variabel kode untuk mengirim parameter yaitu kode kedalam database
	
	$query = mysqli_query($koneksi, "SELECT * FROM account WHERE email='$email' AND password='$password'");
	// mendeklarasikan variabel query yang berisi perintah mysqli_querry yang menyimpan parameter file koneksi dan perintah method di tabel akun
	
	if(mysqli_num_rows($query) == 0){
		// lalu melakukan pengecekkan dengan method mysqli_num_rows untuk mengecek variabel query apakah sama dengan 0 atau tidak
		header("location:". BASE_URL . "index.php?page=user_access/login&notif=true");
		// jika tidak akan ditujukan ke halaman ini
	}else{
	
		$row = mysqli_fetch_assoc($query);
		// jika ya lalu mendefinisikan variabel row yang berisi method mysqli_fetch_assoc yang berisi parameter variabel query 

		
		session_start();
		// lalu memnggil method session start untuk memulai eksekusi session pada server dan kemudian menyimpannya pada browser
		
		$_SESSION['user_id'] = $row['user_id'];
		$_SESSION['nama_lengkap'] = $row['nama_lengkap'];
		$_SESSION['email'] = $row['email'];
		// lalu menggil method session dengan mendaftarkan user id yang berisi nilai pada tabel user id di database
		
		if(isset($_SESSION["proses_pes"])){
			
			unset($_SESSION["proses_pes"]);
			header("location: ".BASE_URL."index.php?page=data_pem");
		}else{
			header("location: ".BASE_URL."index.php?page=home");
		}
	}