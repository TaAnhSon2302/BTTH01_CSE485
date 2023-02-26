<?php
  include '../connect_db.php';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mabviet = $_POST['txtmabaiviet'];
    $tieude= $_POST['txttieude'];
    $tenbhat= $_POST['txttenbaihat'];
    $matloai = $_POST['txttloai'];
    $tomtat= $_POST['txttomtat'];
    $noidung= $_POST['txtnoidung'];
    $matgia = $_POST['txttgia'];
    $ngayviet = date('Y-m-d H:i:s');
    $hinhanh= $_FILES['filehinhanh'];
    $sql = "UPDATE baiviet SET `tieude` = '$tieude', `ten_bhat` = '$tenbhat', `ma_tloai` = '$matloai', `tomtat` = '$tomtat', `noidung` = '$noidung', `ma_tgia` = '$matgia', 
    WHERE ma_bviet = '$mabviet'";
    $result = mysqli_query($conn,$sql);
    header('Location: article.php');
    exit();
}
?>