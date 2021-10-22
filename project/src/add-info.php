<?php
    if(isset($_POST['submit'])){
    include './config.php';

    $emp_name = $_POST['empName'];
    $emp_position = $_POST['empPosition'];
    $emp_time = $_POST['empTime'];
    $emp_question = $_POST['empQ'];
    $emp_Mart = $_POST['empMart'];
    $emp_times = $_POST['empTi'];
    $emp_status = $_POST['empStatus'];
    $emp_Ma = $_POST['empMa'];

    $sql = "INSERT INTO  exams values('$emp_name', '$emp_position', '$emp_time', '$emp_question','$emp_Mart', '$emp_times', '$emp_status', '$emp_Ma')";
    $result = mysqli_query($con, $sql);
    if($result > 0) {
        header('Location: index.php');
    } else {
        echo 'Lỗi.';
    }

    mysqli_close($con);
}
?>