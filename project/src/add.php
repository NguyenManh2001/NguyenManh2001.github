<?php
include './header.php';
include './config.php';
?>

<main class="container mt-5">
    <h2 class="mb-3">Nhập thông tin môn thi:</h2>
    <form action="./add-info.php" method="post">
        <div class="mb-3 row">
            <label for="empName" class="col-sm-2 col-form-label">Tên bài thi: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="empName" name="empName">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="empPosition" class="col-sm-2 col-form-label">Ngày thi: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="empPosition" name="empPosition">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="empPosition" class="col-sm-2 col-form-label">Thời gian làm bài thi: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="empPosition" name="empTime">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="empMobile" class="col-sm-2 col-form-label">Số câu hỏi: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="empMobile" name="empQ">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="empMobile" class="col-sm-2 col-form-label">Điểm số câu trả lời đúng: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="empMobile" name="empMart">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="empMobile" class="col-sm-2 col-form-label">Ngày làm bài thi: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="empMobile" name="empTi">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="empMobile" class="col-sm-2 col-form-label">Trạng thái: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="empMobile" name="empStatus">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="empMobile" class="col-sm-2 col-form-label">Mã try cập bài thi: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="empMobile" name="empMa">
            </div>
        </div>
        <div class="mb-3 row">
            <button type="submit" class="btn btn-success" name = 'submit'>Thêm</button>
        </div>
    </form>
</main>