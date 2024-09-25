<?php
// memangil file koneksi
include_once("../../function/koneksi.php");
$id_dokter = isset($_POST['id_dokter']) ? $_POST['id_dokter'] : false;
$status = isset($_POST['id_pasien']) ? $_POST['id_pasien'] : false;
$gejala = isset($_POST['gejala']) ? $_POST['gejala'] : false;
$status = isset($_POST['status']) ? $_POST['status'] : false;
// pertama mendeklarasikan variabel kode untuk mengirim parameter yaitu kode kedalam database (dari kode sampai status)

?>
<?php 

?>
<?php 
    $data =mysqli_query($koneksi,"select *from jadwal");
    $no = 1;
    while($d = mysqli_fetch_array($data)){
?>
<h3>Tambah Konsultasi / Data Gejala & Status</h3>
<form action="conf_add.php" method="POST" >
    <tr>
        <td>
            <input type="text" name="kode" value="<?php  $a=rand(); echo $a; ?>" readonly>Kode Uniq
        </td>
        <td>
            <input type="text" name="id_jadwal" value="<?php echo $d['id_jadwal'] ?>" readonly>ID Jadwal
        </td>
        <td>
            <input type="text" name="id_dokter" value="<?php echo $d['id_dokter'] ?>" readonly>ID Dokter
        </td>
        <td>
            <input type="text" name="id_pasien" value="<?php echo $d['user_id'] ?>" readonly>ID Pasien
        </td>
        <td>
            <textarea name="gejala" id="" cols="30" rows="10"><?php echo $gejala ?></textarea>
            Gejala
        </td>
        <td>
            <input type="text" name="status" value="<?php echo $status ?>" />Status
        </td>
    </tr>

<button type="submit" class="btn btn-success">Submit</button>

<input type="button" value="Kembali" onclick="history.back(-1)" />

</form>
<?php } ?>