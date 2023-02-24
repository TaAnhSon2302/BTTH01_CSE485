<?php
  include '../connect_db.php';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tentl = $_POST['txtCatName'];

    $sql = "Insert into theloai (ten_tloai) values ('$tentl')";
    $result = mysqli_query($conn,$sql);
    header('Location: ./category.php');
    exit();
}
?>