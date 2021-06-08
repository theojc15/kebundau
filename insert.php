<?php
    session_start();
    include("connection.php");

    if(isset($_POST['submit'])) {
        $tanggal = $_POST['tanggal'];
        $jam = $_POST['hours'];
        $fullname =  $_SESSION['name'];
        $phone = $_POST['phone'];
        $number = $_POST['number'];
        $place = $_POST['location'];
        
        $query = "INSERT INTO reservation(day, hour, name, nohp, person, location) ";
        $query .= "VALUES ('$tanggal', '$jam', '$fullname', '$phone', '$number', '$place')";

        
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
    <meta http-equiv="Refresh" content="0; url='reservation.php'" />
</html>