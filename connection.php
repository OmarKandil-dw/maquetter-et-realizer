<?php
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
        //establishing connection with the database
        //database details
       $host = "localhost";
       $username = "root";
       $password = "";
       $dbname = "GestionMagasin";
       //creating connection 
       $con = mysqli_connect($host, $username, $password, $dbname);
       //checking connection status
       if (!$con)
       {
           die("Connection failed!" . mysqli_connect_error());
       }
       
