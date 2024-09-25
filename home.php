<?php
    include_once("index.php");
    // memanggi file koneksi

    $page = isset($_GET['page']) ? $_GET['page'] : false;
?>
    <div class="top-wrapper"> 
      <div class="container">
        <div class="top-container">  
          <h1>Rumah Sakit</h1>

          <?php

          if($user_id){
            echo "
            <a href='".BASE_URL."index.php?page=profile_rumahsakit/dokter' target='_blank'>DOKTER</a>
            <a href='".BASE_URL."index.php?page=profile_rumahsakit/pasien' target='_blank'>PASIEN</a>
            <a href='".BASE_URL."index.php?page=profile_rumahsakit/jadwal' target='_blank'>JADWAL</a>
            <a href='".BASE_URL."index.php?page=profile_rumahsakit/konsultasi' target='_blank'>KONSULTASI</a>
            <a href='".BASE_URL."index.php?page=profile_rumahsakit/checkup' target='_blank'>CHECK UP</a>
            ";
            // membuat link ke halamaman yang ingin dituju
          }
          ?>
        </div>

        <div>
        <?php

          if($user_id){
            include_once('corousel.php');
          }
        ?>
        </div>
          
          <div class="btm-right-container">
            <img src="images/hospital.png">
          </div>
        </div>
      </div>
    </div>

  
