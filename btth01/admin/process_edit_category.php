<?php
  include '../connect_db.php';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $matheloai = $_POST['txtmatheloai'];
    $tentheloai= $_POST['txttentheloai'];
    $sql = "UPDATE `theloai` SET `ten_tloai`='$tentheloai' WHERE ma_tloai= '$matheloai';";
    $result = mysqli_query($conn,$sql);
    header('Location: category.php');
    exit();
}
?>