<?php
// memangil file koneksi
include_once("../../function/koneksi.php");
$id_dokter = isset($_POST['id_dokter']) ? $_POST['id_dokter'] : false;
$status = isset($_POST['id_pasien']) ? $_POST['id_pasien'] : false;
$gejala = isset($_POST['gejala']) ? $_POST['gejala'] : false;
$status = isset($_POST['status']) ? $_POST['status'] : false;

?>
<?php 

?>
<?php 
    $id = $_GET['id_jadwal'];
    $data =mysqli_query($koneksi,"SELECT * from jadwal p inner join konsultasi b on p.id_jadwal=b.id_jadwal where p.id_jadwal='$id'") or die (mysqli_error($koneksi));
        $no = 1;
        while($d = mysqli_fetch_array($data)){
?>
<h3>Edit Konsultasi / Data Gejala & Status</h3>
<form action="conf_move_data.php" method="POST" >
    <tr>
        <td>
            <input type="text" name="kode" value="<?php echo $d['kode']; ?>" readonly>Kode Uniq
        </td>
        <td>
            <input type="text" name="id_konsultasi" value="<?php echo $d['id_konsultasi'] ?>" hidden>
            <input type="text" name="id_jadwal" value="<?php echo $d['id_jadwal'] ?>" hidden>
            <input type="text" name="id_pasien" value="<?php echo $d['id_pasien'] ?>" readonly>ID Pasien
        </td>
        <td>
            <input type="text" name="id_dokter" value="<?php echo $d['id_dokter'] ?>" readonly>ID Dokter
        </td>
        <td>
            <input type="text" name="tanggal" value="<?php echo $d['tanggal'] ?>" />Tanggal
        </td>
        <td>
            <input type="text" name="status" value="<?php echo $d['status'] ?>" />Status
        </td>
    </tr>

<button type="submit" name="save" class="btn btn-success">Submit</button>
<input type="button" value="Kembali" onclick="history.back(-1)" />

</form>
<?php } ?>