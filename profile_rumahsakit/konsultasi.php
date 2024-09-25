<?php

    include_once("./index.php");
    include_once ("./function/koneksi.php");

?>

<!DOCTYPE html>
<html>
<head>
  <title>Konsultasi</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>

<div class="form-konsultasi-bg">
    <h3>
    <div class="judul">Konsultasi</div>
    </h3>
  <div class="form-konsultasi">
      <!-- <a href="<?php //echo BASE_URL."profile_rumahsakit/crud/tambah.php" ?>">
                  
      <button class="btn btn-sm btn-primary">Tambah</button>
      </a> -->
      <table class="table table-hover">
          <thead>
              <h5>
              <div class="list-konsultasi">List Jadwal</div>
              </h5>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Id Jadwal</th>
                <th scope="col">Id Dokter</th>
                <th scope="col">Hari</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Waktu</th>
                <th scope="col">Opsi</th>
              </tr>
          </thead>
          <tbody>

            <?php  
              $data =mysqli_query($koneksi,"select *from jadwal order by id_jadwal desc");
              $no = 1;
              while($d = mysqli_fetch_array($data)){
              ?>

              <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td><?php echo $d['id_jadwal']; ?></td>
                <td><?php echo $d['id_dokter']; ?></td>
                <td><?php echo $d['hari']; ?> </td>
                <td><?php echo $d['tanggal']; ?> </td>
                <td><?php echo $d['waktu']; ?> </td>
                <td>
                <p>Silahkan Tambah Gejala dan <br> Status Anda Pada Halaman Edit</p>
                  <a href="http://localhost/rumahsakit/profile_rumahsakit/crud/edit_jadwal.php?id_jadwal=<?php echo $d['id_jadwal']; ?>">
                    <button class="btn btn-sm btn-success">Edit</button>
                  </a>
                  <a href="http://localhost/rumahsakit/profile_rumahsakit/crud/conf_del_jadwal.php?id_jadwal=<?php echo $d['id_jadwal']; ?>">
                    <button class="btn btn-sm btn-danger">Hapus</button>
                  </a>
                </td>
              </tr>
              <?php 
              
            }
          
    ?>
        </tbody>
      </table>
  </div>
  <div class="form-konsultasi">
    <!-- <p>Tambah Gejala dan Status Anda</p>
      <a href="<?php echo BASE_URL."profile_rumahsakit/crud/tambah.php" ?>">
                  <a href="http://localhost/rumahsakit/profile_rumahsakit/crud/edit.php?id_konsultasi=<?php echo $dk['id_konsultasi']; ?>">
      <button class="btn btn-sm btn-primary">Tambah</button>
      </a> -->
      <table class="table table-hover">
          <thead>
              <h5>
              <div class="list-konsultasi">List Konsultasi </div>
              </h5>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Id Dokter</th>
                <th scope="col">Id Pasien</th>
                <th scope="col">Gejala</th>
                <th scope="col">Status</th>
                <th scope="col">Opsi</th>
              </tr>
          </thead>
          <tbody>
  
            <?php  
              $data =mysqli_query($koneksi,"select *from konsultasi");
              $no = 1;
              while($d = mysqli_fetch_array($data)){
              ?>
  
              <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td><?php echo $d['id_dokter']; ?></td>
                <td><?php echo $d['id_pasien']; ?> </td>
                <td><?php echo $d['gejala']; ?> </td>
                <td><?php echo $d['status']; ?> </td>
                <td>
                  <a href="http://localhost/rumahsakit/profile_rumahsakit/crud/edit.php?id_konsultasi=<?php echo $d['id_konsultasi']; ?>">
                    <button class="btn btn-sm btn-success">Edit</button>
                  </a>
                  <a href="http://localhost/rumahsakit/profile_rumahsakit/crud/conf_delete.php?id_konsultasi=<?php echo $d['id_konsultasi']; ?>id_konsultasi=<?php echo $d['id_konsultasi']; ?>">
                    <button class="btn btn-sm btn-danger">Hapus</button>
                  </a>
                </td>
              </tr>
              <?php 
              
            }
          
    ?>
        </tbody>
      </table>
  </div>
</div>
</body>
</html>
