<?php
    $server='localhost';
    $username='root';
    $password='';
    $database_name="covid";
    $conn=mysqli_connect($server,$username,$password,$database_name);
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
 

    // if(!isset($_SESSION))session_start();
?>