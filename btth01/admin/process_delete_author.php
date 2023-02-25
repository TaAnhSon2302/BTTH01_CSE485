<?php
    include '../connect_db.php';
        $matgia = $_GET['id'];
        $sql = "DELETE FROM tacgia WHERE ma_tgia = '$matgia';";
        $result = mysqli_query($conn,$sql);
        header('Location: author.php');

?>