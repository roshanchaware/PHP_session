<?php 
session_start();
unset($_SESSION['studid']);
unset($_SESSION['studname']);
unset($_SESSION['uname']);
unset($_SESSION['pass']);

echo "Logout successfuly";
header('location:login.php');
 ?>