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
            $errmsg="Email already been used";
        } else {
            echo '<script> alert("Success"); 
                window.location.href = "login.php";
            
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
        <a href="index.php" style="position:relative;top:-25px;right:-10px;float:right;z-index:99;text-decoration:none;">x</a>
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 600;">Sign Up</p>
			<div style="text-align: center;"> <?php 
				if ($errmsg!='') echo $errmsg;
			  ?></div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="pass" required>
            </div>
			<div class="input-group">
				<input type="text" placeholder="Fullname" name="fullname" required>
			</div>
			<div class="gender-details">
				<input type="radio" name="gender" value="male" id="dot-1">
				<input type="radio" name="gender" value="female" id="dot-2">
				<input type="radio" name="gender" value="none" id="dot-3">
				<span class="gender-title">Gender</span>
				<div class="category">
				  <label for="dot-1">
					<span class="dot one"></span>
					<span class="gender">Male</span>
				  </label>
				  <label for="dot-2">
					<span class="dot two"></span>
					<span class="gender">Female</span>
				  </label>
				  <label for="dot-3">
					<span class="dot three"></span>
					<span class="gender">None </span>
				  </label>
				</div>
			</div>
			<p><span><input required type = "checkbox"></span> I agree to the terms and service </p> <br>
			<div class="input-group">
				<button type="submit" name="signup" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>