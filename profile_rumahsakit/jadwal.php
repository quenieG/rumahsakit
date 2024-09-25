<?php

    include_once("./index.php");	
    include_once ("./function/koneksi.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Jadwal</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>

	<?php

		$notif = isset($_POST['notif']) ? $_POST['notif'] : false;
		$id_dokter = isset($_POST['id_dokter']) ? $_POST['id_dokter'] : false;
		$id_pasien = isset($_POST['id_pasien']) ? $_POST['id_pasien'] : false;
		$hari = isset($_POST['hari']) ? $_POST['hari'] : false;
		$tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : false;
		$waktu = isset($_POST['waktu']) ? $_POST['waktu'] : false;

		if($notif == "require") {
			echo "<div class='notif'>Maaf, kamu harus melengkapi form dibawah ini</div>";
		}
		
	?>

	<div class="form-jadwal-bg">
		<form action="<?php echo BASE_URL."profile_rumahsakit/set_jadwal.php"; ?>" method="POST">
				<h3>
					<div class="judul">Jadwal</div>
				</h3>
			<div class="form-jadwal">
				<div class="mb-3">
					<label for="exampleInputId" class="form-label">Id Dokter</label>
					<select class="form-control" id="exampleFormControlSelect1" name="id_dokter">
					<?php 
					$hasil    =mysqli_query($koneksi, "SELECT * FROM dokter");
					while ($data = mysqli_fetch_array($hasil)) { 
						?>
						<option value="<?php echo $data['id_dokter'] ?>"><?php echo $data['id_dokter'] ?>. <?php echo $data['nama_dokter'] ?></option>
						<?php }?>
					</select>
					<!-- <input type="name" class="form-control" id="exampleInputid" name="id_dokter" value="<?php // echo $result['id_dokter'] ?>"> -->
				</div>
				<div class="mb-3">
					<label for="exampleInputId" class="form-label">Id Pasien</label>
					<input type="name" class="form-control" id="exampleInputid" name="id_pasien" value="<?php echo $user_id ?>" readonly>
				</div>
				<div class="form-group">
					<label for="exampleFormControlSelect1">Hari</label>
					<select class="form-control" id="exampleFormControlSelect1" name="hari">
						<option selected>Pilih</option>
						<option value="Senin">Senin</option>
						<option value="Selasa">Selasa</option>
						<option value="Rabu">Rabu</option>
						<option value="Kamis">Kamis</option>
						<option value="Jumat">Jumat</option>
						<option value="Sabtu">Sabtu</option>
						<option value="Minggu">Minggu</option>
					</select>
				</div>
				<div class="form-group">
					<label class="control-label" for="date">Date</label>
					<input class="form-control" id="date" placeholder="MM/DD/YYY" type="date" name="tanggal" value="<?php echo $tanggal ?>"/>
				</div>
				<div class="mb-3">
					<label for="exampleInputWaktu" class="form-label">Waktu</label>
					<input type="time" class="form-control" id="exampleInputWaktu" name="waktu" value="<?php echo $waktu ?>">
				</div>
				<div>
					<button type="submit" name="submit" class="btn btn-success">Submit</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>
