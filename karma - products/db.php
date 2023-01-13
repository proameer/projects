<?php
    $url='localhost';
    $username='root';
    $password='';
    $conn=mysqli_connect($url,$username,$password,"freshshop");
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }

    if(!isset($_SESSION))session_start();
?>