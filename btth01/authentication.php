<?php 
  include './connect_db.php';
  session_start();
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $tk = $_POST['user'];
    $mk = $_POST['pass'];
    $sql = "SELECT * from users where tai_khoan='$tk' and mat_khau='$mk'";
    $row = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($row);
    if($count==1)
    {
        header('location:admin/index.php');
    }
  }
?>