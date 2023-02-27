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
        $ngayviet = date('date-input');
        $hinhanh = $_POST['file-upload'];

        $link = './images/songs/' . $_FILES['file-upload']['name'];
        $temp = $_FILES['file-upload']['tmp_name'];
        $path = '../images/songs/' . $_FILES['file-upload']['name'];
        $moved = move_uploaded_file($temp, $path);


        $sql = "INSERT INTO `baiviet`( `tieude`, `ten_bhat`, `ma_tloai`, `tomtat`, `noidung`, `ma_tgia`, `ngayviet`, `hinhanh`) 
        VALUES ('$tieude', '$tenbhat', '$matloai', '$tomtat','$noidung', '$matgia', '$ngayviet', $link$hinhanh)";
        $result = mysqli_query($conn,$sql);
        header('Location: article.php');
        
    }
?>