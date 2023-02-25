<?php
  include '../connect_db.php';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mabaiviet = $_POST['txtmabaiviet'];
    $tieude= $_POST['txttieude'];
    $tenbaihat= $_POST['txttenbaihat'];
    $matheloai = $_POST['txtmatheloai'];
    $tomtat= $_POST['txttomtat'];
    $noidung= $_POST['txtnoidung'];
    $matacgia = $_POST['txtmatgia'];
    $ngayviet = date('Y-m-d H:i:s');
    $hinhanh= $_FILES['filehinhanh'];
    $sql = "UPDATE baiviet SET tieude = '$tieude', ten_bhat = '$tenbhat', ma_tloai = '$matloai', tomtat = '$tomtat', noidung = '$noidung', ma_tgia = '$matgia', ngayviet = '$ngayviet'
    WHERE ma_bviet = '$ma_bviet'";
    $result = mysqli_query($conn,$sql);
    header('Location: article.php');
    exit();
}
?>