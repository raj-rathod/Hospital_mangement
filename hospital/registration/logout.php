<?php
session_start();
unset($_SESSION['pid']);
unset($_SESSION['pname']);
unset($_SESSION['did']);
unset($_SESSION['dname']);
header('location:../index.php');

?>