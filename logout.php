<?php 
session_start();
unset($_SESSION['email']);
unset($_SESSION["ID"]);
unset($_SESSION["uloga"]);
header("Location: index.php")
?>