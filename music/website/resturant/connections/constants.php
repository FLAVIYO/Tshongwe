<?php
 //create session
 session_start();

    define('SETURL','http://localhost/resturant/');
    define('LOCALHOST','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_NAME','Restaurant');

     //database connection
   $conn = mysqli_connect( LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());
   //selecting database
   $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error());

?>