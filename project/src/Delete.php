<?php
    include './config.php';
    $ID = $_GET['id'];
    $sql = "delete from exams where ID = '$ID'";
    $result = mysqli_query($con, $sql);
    if($result > 0) {
        header("Location: ./index.php");
    }
?>