<?php
  include '../connect_db.php';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username  = $_POST['txtusername'];
    $userpass= $_POST['txtpassword'];
    $quyenhan = $_POST['txtquyenhan'];
    $sql = "Insert into users (tai_khoan,mat_khau,quyen_han) values('$username','$userpass','$quyenhan') ";
    $result = mysqli_query($conn,$sql);
    header('Location: user.php');
}
?>