<?php
session_start();
// ket noi database server
$conn = mysqli_connect('localhost','root','','btth01_cse485');
if(!$conn)
    die("Ket noi Server loi)");
?>