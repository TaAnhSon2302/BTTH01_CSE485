<?php
    include '../connect_db.php';
        $matheloai = $_GET['id'];
        $sql = "DELETE FROM theloai WHERE `theloai`.`ma_tloai` = $matheloai;";
        $result = mysqli_query($conn,$sql);
        header('Location: category.php');

?>