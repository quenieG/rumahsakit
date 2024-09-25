<?php

    include_once("./index.php");
    include_once ("./function/koneksi.php");

?>

<!DOCTYPE html>
<html>
<head>
  <title>Dokter</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>

<div class="form-pasien-bg">
    <h3>
    <div class="judul">Pasien</div>
    </h3>
<div class="form-pasien">
    <table class="table table-hover">
        <thead>
            <h5>
            <div class="list-pasien">List Pasien </div>
            </h5>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nama Lengkap</th>
              <th scope="col">Username</th>
              <th scope="col">Email</th>
              <th scope="col">NoHP</th>
            </tr>
        </thead>
        <tbody>
            <?php  
            if(isset($_GET['cari'])){
            $cari =$_GET['cari'];
            $query7 ="select *from account
            where nama
            like '%".$cari."%'
            ";


            $data =mysqli_query($koneksi,$query7);
            $cek =mysqli_num_rows($data);
            if($cek>0){
                echo "Data ditemukan";
            }else{
                echo "data tidak ditemukan";
            }
        }

        else{
            $data =mysqli_query($koneksi,"select *from account");
        } 

        $no = 1;
        while($d = mysqli_fetch_array($data)){
        ?>
            <tr>
              <th scope="row"><?php echo $no++; ?></th>
              <td><?php echo $d['nama_lengkap']; ?></td>
              <td><?php echo $d['username']; ?></td>
              <td><?php echo $d['email']; ?></td>
              <td><?php echo $d['no_hp']; ?></td>
              <td>-</td>
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
