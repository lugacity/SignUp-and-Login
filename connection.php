<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "loginphp";

   if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
   {
    die("Fialed to connect!");
   };
?>
