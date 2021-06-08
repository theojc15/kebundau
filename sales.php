<?php
    session_start();
    include("connection.php");

    if(isset($_POST['submit'])) {
        $fullname =  $_SESSION['name'];
        $adr = $_POST['adr'];
        $email = $_SESSION['email'];
        $phone = $_POST['number'];
        $location = $_POST['location'];
        $oname = $_POST['orange'];
        $osum = $_POST['sum'];
        
        $query = "INSERT INTO sale(user_name, user_address, user_email, user_phone, oranges_location, oranges_name, oranges_sum) ";
        $query .= "VALUES ('$fullname', '$adr', '$email', '$phone', '$location', '$oname', '$osum')";
     
        
        $result = mysqli_query($connection, $query);
        
        
        if(!$result) {
            die('Query failed' . mysqli_error($connection));
        } else {
            echo "Record Created";
        }
    }
?>
<html>
    <script>
        alert("Success");
    </script>
    <meta http-equiv="Refresh" content="0; url='form.php'" />
</html>