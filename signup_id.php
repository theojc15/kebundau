<?php
    session_start();
    include("connection.php");
    //echo $_POST['signup'];
    $errmsg="";
    if(isset($_POST['signup'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $fullname = $_POST['fullname'];
        $gender = $_POST['gender'];

        
        $query = "INSERT INTO user(email, password, name, gender) ";
        $query .= "VALUES ('$email', '$pass', '$fullname', '$gender')";
     
        
        $result = mysqli_query($connection, $query);
        
        
        if(!$result) {
            // die('Query failed' . mysqli_error($connection));
            $errmsg="Email sudah pernah dipakai";
        } else {
            echo '<script> alert("Sukses"); 
                window.location.href = "login_id.php";
            
            </script>';
            //header('location: login.php');

        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/form.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
<!--  -->
	<title>Agrotourism Dau | Sign Up Form</title>
</head>
<body>
	<div class="container">
        <a href="index_id.php" style="position:relative;top:-25px;right:-10px;float:right;z-index:99;text-decoration:none;">x</a>

		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 600;">Daftar</p>
			<div style="text-align: center;"> <?php 
				if ($errmsg!='') echo $errmsg;
			  ?></div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Kata Sandi" name="pass" required>
            </div>
			<div class="input-group">
				<input type="text" placeholder="Nama Lengkap" name="fullname" required>
			</div>
			<div class="gender-details">
				<input type="radio" name="gender" value="male" id="dot-1">
				<input type="radio" name="gender" value="female" id="dot-2">
				<input type="radio" name="gender" value="none" id="dot-3">
				<span class="gender-title">Jenis Kelamin</span>
				<div class="category">
				  <label for="dot-1">
					<span class="dot one"></span>
					<span class="gender">Cowok</span>
				  </label>
				  <label for="dot-2">
					<span class="dot two"></span>
					<span class="gender">Cewek</span>
				  </label>
				  <label for="dot-3">
					<span class="dot three"></span>
					<span class="gender">Lainnya</span>
				  </label>
				</div>
			</div>
			<p><span><input required type = "checkbox"></span> Saya menyetujui persyaratan layanan </p> <br>
			<div class="input-group">
				<button type="submit" name="signup" class="btn">Daftar</button>
			</div>
			<p class="login-register-text">Sudah punya akun? <a href="login.php">Masuk Disini</a>.</p>
		</form>
	</div>
</body>
</html>