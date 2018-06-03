<?php
   $DBHOST = "localhost";
   $DBUSER = "root";
   $DBPASS = "";
   $DBNAME = "tec";
   
   // connect to MySQL Server
   $conn = mysqli_connect($DBHOST, $DBUSER, $DBPASS) or die(mysqli_error());
   
   // select database
   mysqli_select_db($conn, $DBNAME) or die(mysqli_error());
?>