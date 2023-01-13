<?php
session_start();
echo $_SESSION["id"];
unset($_SESSION["email"]);
header("Location:index.php");
?>