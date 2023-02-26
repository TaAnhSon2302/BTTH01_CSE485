<?php
  include '../connect_db.php';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['txtId'];
    $username  = $_POST['txtusername'];
    $userpass= $_POST['txtpassword'];
    $sql = "UPDATE `users` SET `tai_khoan`='$username' , mat_khau ='$userpass' WHERE id_ngdung= '$id';";
    $result = mysqli_query($conn,$sql);
    header('Location: user.php');
}
?>