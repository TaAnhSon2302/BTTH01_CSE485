<?php
  include '../connect_db.php';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mabaiviet = $_POST['txtmabaiviet'];
    $tieude= $_POST['txttieude'];
    $tenbaihat= $_POST['txttenbaihat'];
    $tomtat= $_POST['txttomtat'];
    $noidung= $_POST['txtnoidung'];
    $hinhanh= $_POST['txthinhanh'];
    $sql = "UPDATE `baiviet` SET `ten_bviet`='$tenbaiviet' WHERE ma_bviet = '$mabaiviet';";
    $result = mysqli_query($conn,$sql);
    header('Location: category.php');
    exit();
}
?>