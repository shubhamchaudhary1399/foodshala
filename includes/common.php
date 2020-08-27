<?php
    $con = mysqli_connect("us-cdbr-east-02.cleardb.com", "bda4d464a3c93f", "bd18e408", "heroku_fcc36eb48604f4a")
    or die(mysqli_error($con));
    if(!isset($_SESSION)){
      session_start();
    }
?>
