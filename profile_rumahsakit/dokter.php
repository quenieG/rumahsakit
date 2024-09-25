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
    <div class="judul">Dokter</div>
    </h3>
<div class="form-pasien">
    <table class="table table-hover">
        <thead>
            <h5>
            <div class="list-pasien">List Dokter </div>
            </h5>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nama Lengkap</th>
              <th scope="col">Email</th>
              <th scope="col">Spesialis</th>
              <th scope="col">NoHp</th>
            </tr>
        </thead>
        <tbody>
            <?php  
            if(isset($_GET['cari2'])){
            $cari2 =$_GET['cari2'];
            $query7 ="SELECT * FROM dokter
            WHERE nama
            LIKE '%".$cari2."%'
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
            $data =mysqli_query($koneksi,"SELECT * FROM dokter");
        } 

        $no = 1;
        while($d = mysqli_fetch_array($data)){
        ?>
            <tr>
              <th scope="row"><?php echo $no++; ?></th>
              <td><?php echo $d['nama_dokter']; ?></td>
              <td><?php echo $d['email']; ?></td>
              <td><?php echo $d['spesialis']; ?></td>
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
