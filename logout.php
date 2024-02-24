<?php 
session_start();
$un = $_SESSION['un'];
unset($un);
session_destroy();
header('location:index.php');
?>