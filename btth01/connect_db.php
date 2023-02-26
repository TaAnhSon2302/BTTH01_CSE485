<?php
session_start();
$conn = mysqli_connect('localhost','root','','btth01_cse485');
if(!$conn)
    die("Ket noi Server loi)");
?>