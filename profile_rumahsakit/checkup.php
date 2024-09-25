<?php

    include_once("./index.php");
    include_once ("./function/koneksi.php");

?>

<!DOCTYPE html>
<html>
<head>
  <title>Checkup</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
</head>
<body>

  <div class="form-checkup-bg">
    <h3>
    <div class="judul">Checkup</div>
    </h3>
    <div class="form-checkup">
      <!-- <form action="<?php echo BASE_URL."profile_rumahsakit/checkup.php";?>" method="get" class="d-flex" role="search">
        <input class="form-control me-2 w-25 ms-auto form-control-sm" name="cari" value="<?php if(isset($_GET['cari'])) { echo $_GET['cari']; } ?>" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-sm ms-2 btn-primary" type="submit">Search</button>
      </form> -->
      <table id="cari" class="table table-hover">
        <thead>
          <h5>
          <div class="list-checkup">List Konsultasi </div>
          </h5>
          <h6>checkup antri</h6>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Id Pasien</th>
            <th scope="col">Id Dokter</th>
            <th scope="col">Gejala</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Status</th>
            <th scope="col">Opsi</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $data ="SELECT * FROM jadwal, konsultasi WHERE jadwal.id_jadwal = konsultasi.id_jadwal";
            $result = mysqli_query($koneksi, $data);
            
            $no = 1;
            while($d = mysqli_fetch_array($result)){
          ?>
          <tr>
            <th scope="row"><?php echo $no++; ?></th>
            <td><?php echo $d['id_pasien']; ?></td>
            <td><?php echo $d['id_dokter']; ?></td>
            <td><?php echo $d['gejala']; ?></td>
            <td><?php echo $d['tanggal']; ?></td>
            <td><?php echo $d['status']; ?></td>
            <td>
              <a href="http://localhost/rumahsakit/profile_rumahsakit/crud/move_data.php?id_jadwal=<?php echo $d['id_jadwal']; ?>">
                <button class="btn btn-sm btn-success">Edit</button>
              </a>
              <a href="http://localhost/rumahsakit/profile_rumahsakit/crud/conf_delete.php?id_konsultasi=<?php echo $d['id_konsultasi']; ?>">
                <button class="btn btn-sm btn-danger">Hapus</button>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <script>
        $(document).ready(function () {
          $('#cari').DataTable();
        });
      </script>
    </div>
    <div class="form-checkup">
      <h5>
        <div class="list-checkup2">List Checkup </div>
      </h5>
      <h6>Checkup Selesai</h6>
      <table id="cari1" class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Id Pasien</th>
            <th scope="col">Id Dokter</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Status</th>
            <th scope="col">Opsi</th>
          </tr>
        </thead>
        <tbody>            
          <?php 
            $data =mysqli_query($koneksi,"SELECT * FROM checkup") or die (mysqli_error($koneksi));
            $no = 1;
            while($d = mysqli_fetch_array($data)){          
          ?>
          <tr>
            <th scope="row"><?php echo $no++; ?></th>
              <td><?php echo $d['id_pasien']; ?></td>
              <td><?php echo $d['id_dokter']; ?></td>
              <td><?php echo $d['tanggal']; ?></td>
              <td><?php echo $d['status']; ?></td>
              <td>
                <a href="http://localhost/rumahsakit/profile_rumahsakit/crud/conf_del_checkUp.php?id_cek=<?php echo $d['id_cek']; ?>">
                  <button class="btn btn-sm btn-danger">Hapus</button>                
                </a>
                <a href="http://localhost/rumahsakit/profile_rumahsakit/crud/cetak.php?id_cek=<?php echo $d['id_cek']; ?>">
                  <button class="btn btn-sm btn-primary">Cetak</button>    
                </a>   
                
              </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <script>
        $(document).ready(function () {
          $('#cari1').DataTable();
        });
      </script>
    </div> 


</body>
</html>
