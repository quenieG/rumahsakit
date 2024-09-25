<?php 
	include_once ("../../function/koneksi.php");
	// memanggi file koneksi
?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>Id Pasien</th>
			<th>Id Dokter</th>
			<th>Tanggal</th>
			<th>Status</th>
			<!-- untuk membuat tabel -->
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"SELECT * FROM checkup");
		// mendeklarasikan variabel sql yang berisi perintah mysql di tabel checkup
		while($data = mysqli_fetch_array($sql)){
		// Melakukan perulangan while yg berisi pengecekan variabel data = method mysqli fetch array yg berisi variabel sql untuk mengambil data di db
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['id_pasien']; ?></td>
			<td><?php echo $data['id_dokter']; ?></td>
			<td><?php echo $data['tanggal']; ?></td>
			<td><?php echo $data['status']; ?></td>
			<!-- untuk menampilkan data sesuai pada databas checkup -->
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
		// untuk mencetak sebuah halaman website
	</script>