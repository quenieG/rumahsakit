<?php

    session_start();

    include_once("function/helper.php");

    $page = isset($_GET['page']) ? $_GET['page'] : false;

    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;
  	$nama_lengkap = isset($_SESSION['nama_lengkap']) ? $_SESSION['nama_lengkap'] : 'nama tidak di temukan';
  	$email = isset($_SESSION['email']) ? $_SESSION['email'] : 'email tidak di temukan';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Sakit</title>
    <link rel="stylesheet" href="<?php echo BASE_URL."css/stylesheet.css"; ?>" type="text/css">
    <!-- <link rel="stylesheet" href="responsive.css"> -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="ironman.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>

  <body>
    <header>
      <div class="container">
        <div class="header-left">
         
          <div class="header-logo">
            <a href="<?php echo BASE_URL."index.php?page=home"; ?>">
              <img class="logo" src="<?php echo BASE_URL."images/hospital.png";?>" />
            </a>
          </div>

          <div class="menu-malasngoding">
            <ul>

              <li class="dropdown"><a href="<?php echo BASE_URL."index.php?page=home"; ?>">RS Dandelionsky</a>
              </li>
            </ul>
          </div>

        </div>

        <!-- <span class="fa fa-bars menu-icon"></span> -->

        <div class="header-right">
          <div class="menu-malasngoding">
            <ul>

              <?php
							if($user_id){
								echo "
                  <li
                    class='dropdown'><a href='".BASE_URL."index.php?page=profile_user/info_pribadi&module=pesanan&action=list'><b>$nama_lengkap</b></a>
                      <ul class='isi-dropdown'>
                        <li>
                          <a href='".BASE_URL."user_access/logout.php'>Logout</a>
                        </li>
                      </ul>
                  </li>
                  <li
                    class='dropdown'><a href='".BASE_URL."user_access/logout.php'>Logout</a>
                  </li>
                  
                  ";
							}else{
								echo "
                  <li
                    class='dropdown'><a href='".BASE_URL."index.php?page=user_access/register'>REGISTER</a>
                  </li>
                  <li
                    class='dropdown'><a href='".BASE_URL."index.php?page=user_access/login'>LOGIN</a>
                  </li>
                  ";
							}  
						?>
              
            </ul>
          </div>

        </div>
      </div>
    </header>
    
    <?php

      if($user_id){
        include_once('sidebar2.php');
      }
    
    ?>

    <div id="content">
      <?php
        $filename = "$page.php";
        
        if(file_exists($filename)) {
            include_once($filename);
        } else {
            echo "Maaf, file tersebut tidak ada di dalam sistem";
        }
      ?>
    </div>

    <footer>
      <div class="container">
        <div class="footer-left">
          <a href="<?php echo BASE_URL."index.php?page=home"; ?>">
            <img class="logo" src="<?php echo BASE_URL."images/hospital.png";?>" />
            <p>DANDELIONSKY</p>
          </a>
        </div>

        <div class="footer-right">
          <p>copyright Rumah Sakit 2022<br>
	      </div>
      </div>
    </footer>
  </body>
</html>
