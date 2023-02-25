<?php
  include '../connect_db.php';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tentg = $_POST['txttentgia'];
    $matg = $_POST['txtmatgia'];
    $sql = "UPDATE `tacgia` SET `ten_tgia`='$tentg' WHERE ma_tgia= '$matg';";
    $result = mysqli_query($conn,$sql);
    header('Location: author.php');
    exit();
}
?>