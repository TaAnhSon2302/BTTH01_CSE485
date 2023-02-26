<?php
    include '../connect_db.php';
        $userid = $_GET['id'];
        $sql = "DELETE FROM users WHERE `users`.`id_ngdung` = $userid;";
        $result = mysqli_query($conn,$sql);
        header('Location: user.php');

?>