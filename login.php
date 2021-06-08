<?php
    session_start();
    include("connection.php");
    $errmsg="";
    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $query = "select * from user ";
        $query .= "where email='$email' and password='$pass'";
     
        
        $result = mysqli_query($connection, $query);
        
        
        if(!$result) {
            die('Query failed' . mysqli_error($connection));
        } else {
            $row_cnt = mysqli_num_rows($result);
            if ($row_cnt>0){
              $row = mysqli_fetch_assoc($result);
              $_SESSION['name']=$row['name'];
              $_SESSION['email']=$row['email'];
              echo '<script> alert("Success"); 
                window.location.href = "index.php";
            
              </script>';
            }else{
              $errmsg="Email or password incorect";
              //echo $errmsg;
            }
            
            
        }
        mysqli_close($connection);
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/login.css">

	<title>Agrotourism Dau | Login Form </title>
</head>
<body>
	<div class="container">
        <a href="index.php" style="position:relative;top:-25px;right:-10px;float:right;z-index:99;text-decoration:none;">x</a>

		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 600;">Login</p>
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
        <button type ="submit" name="login" class="btn">Login</button>
			</div>
			<div class="login-register-text">
				Not a member? <a href="signup.php">Sign up</a>
			</div>
		</form>
	</div>
</body>
</html>