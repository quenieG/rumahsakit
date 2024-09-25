<?php

    if($user_id) {
        header("location:" .BASE_URL);
        // pertama melakukan pengecekkan apakah user id bernilai true atau false, jika true halaman base url akan dikirimm 
    }

?>


<form action="<?php echo BASE_URL."user_access/proses_login.php"; ?>" method="POST">


    <div class="element-parent">

        <div class="head">
            <a href="<?php echo BASE_URL."index.php?page=../home"; ?>">
                <img class="logo" src="<?php echo BASE_URL."images/hospital.png";?>" />
            </a>
        </div>

        <?php

            $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
            
            if($notif == true){
                echo "<div class='notif'>Maaf, email atau password yang kamu masukan tidak cocok</div>";
            }

        ?>

        <div class="element-form">
            <label>Email</label>
            <span><input type="text" name="email" /></span>
        </div>
        <div class="element-form">
            <label>Password</label>
            <span><input type="password" name="password"/></span>
        </div>
        <div class="element-form">
            <!-- <label>Submit</label> -->
            <span><input type="submit" name="login" value="Login"/></span>
        </div> 

        <div class="element-uform">
            <p>Belum memiliki akun</p>
            <a href="<?php echo BASE_URL."index.php?page=user_access/register"; ?>">Register</a>
        </div>
    </div>

</form>