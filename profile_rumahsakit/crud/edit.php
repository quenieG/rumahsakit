<?php
// memangil file koneksi
include_once("../../function/koneksi.php");
$id_dokter = isset($_POST['id_dokter']) ? $_POST['id_dokter'] : false;
$status = isset($_POST['id_pasien']) ? $_POST['id_pasien'] : false;
$gejala = isset($_POST['gejala']) ? $_POST['gejala'] : false;
$status = isset($_POST['status']) ? $_POST['status'] : false;
// mendeklarasikan variabel kode untuk mengirim parameter yaitu kode kedalam database (dari id dokter sampai status)

?>
<?php 

?>
<?php 
    $id = $_GET['id_konsultasi'];
    $data =mysqli_query($koneksi,"SELECT * FROM konsultasi where id_konsultasi='$id'");
    // mendeklarasikan variabel query yang berisi perintah mysqli_querry yang menyimpan parameter file koneksi dan perintah method di tabel konsultasi
    $no = 1;
    while($d = mysqli_fetch_array($data)){
    // menggunakan looping while dengan mendeklarasikan variabel d untuk menampung data yang dipanggil dari method mysqli_fetch_array
?>
<h3>Edit Konsultasi / Data Gejala & Status</h3>
<form action="conf_edit.php" method="POST" >
    <tr>
        <td>
            <input type="text" name="kode" value="<?php echo $d['kode'] ?>" readonly>Kode Uniq
        </td>
        <td>
            <input type="text" name="id_konsultasi" value="<?php echo $d['id_konsultasi'] ?>" hidden>
            <input type="text" name="id_dokter" value="<?php echo $d['id_dokter'] ?>" readonly>ID Dokter
        </td>
        <td>
            <input type="text" name="id_pasien" value="<?php echo $d['id_pasien'] ?>" readonly>ID Pasien
        </td>
        <td>
            <textarea name="gejala" id="" cols="30" rows="10"><?php echo $d['gejala'] ?></textarea>
            Gejala
        </td>
        <td>
            <input type="text" name="status" value="<?php echo $d['status'] ?>" />Status
        </td>
    </tr>

<button type="submit" name="save" class="btn btn-success">Submit</button>
<input type="button" value="Kembali" onclick="history.back(-1)" />

</form>
<?php } ?>