<?php
    include '../connect_db.php';
        $mabviet = $_GET['id'];
        $sql = "DELETE FROM baiviet WHERE `baiviet`.`ma_bviet` = $mabviet;";
        $result = mysqli_query($conn,$sql);
        header('Location: article.php');

?>