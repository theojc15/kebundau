<?php
    session_start();
    unset($_SESSION["name"]);
    unset($_SESSION["email"]);
   
    header('Refresh: 2; URL = index.php');
?>