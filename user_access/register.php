<?php

    if($user_id){
        header("location: ".BASE_URL);
    }

?>

<form action="<?php echo BASE_URL."user_access/proses_register.php"; ?>" method="POST">

    <div class="element-parent">

        <div class="head">
            <a href="<?php echo BASE_URL."index.php?page=../home"; ?>">
                <img class="logo" src="<?php echo BASE_URL."images/hospital.png";?>" />
            </a>
        </div>

        <?php
            $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
            $nama_lengkap = isset($_GET['nama_lengkap']) ? $_GET['nama_lengkap'] : false;
            $email = isset($_GET['email']) ? $_GET['email'] : false;
            $username = isset($_GET['username']) ? $_GET['username'] : false;
            $no_hp = isset($_GET['no_hp']) ? $_GET['no_hp'] : false;

            if($notif == "require") {
                echo "<div class='notif'>Maaf, kamu harus melengkapi form dibawah ini</div>";
            } elseif($notif == "password") {
                echo "<div class='notif'>Maaf, password yang kamu masukkan tidak sama</div>";
            } elseif($notif == "email") {
                echo "<div class='notif'>Maaf, email yang kamu masukkan sudah terdaftar</div>";
            }
        ?>

        <div class="element-form">
            <label>Nama lengkap</label>
            <span><input type="text" name="nama_lengkap" value="<?php echo $nama_lengkap ?>"/></span>
        </div>
        <div class="element-form">
            <label>Email</label>
            <span><input type="text" name="email" value="<?php echo $email ?>"/></span>
        </div>
        <div class="element-form">
            <label>Username</label>
            <span><input type="text" name="username" value="<?php echo $username ?>"/></span>
        </div>
        <div class="element-form">
            <label>Nomor Telepon</label>
            <span><input type="text" name="no_hp" value="<?php echo $no_hp ?>"/></span>
        </div>
        <div class="element-form">
            <label>Password</label>
            <span><input type="password" name="password"/></span>
        </div>
        <div class="element-form">
            <label>Re-Type Password</label>
            <span><input type="password" name="re_password"/></span>
        </div>
        <div class="element-form">
            <!-- <label>Submit</label> -->
            <span><input type="submit" name="register" value="Register"/></span>
        </div> 

        <div class="element-uform">
            <p>Saya sudah memiliki akun</p>
            <a href="<?php echo BASE_URL."index.php?page=user_access/login"; ?>">Login</a>
        </div>
    </div>

</form>