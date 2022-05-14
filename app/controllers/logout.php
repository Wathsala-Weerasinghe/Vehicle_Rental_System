<?php
session_start();

unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['admin']);
unset($_SESSION['email']);
session_destroy();

header('location:../../assets/html/index.php');
?>
