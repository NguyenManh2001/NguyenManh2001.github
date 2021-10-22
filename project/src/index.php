<main class="container mt-5">
    <h2 class="mb-3">Hiển thị danh sách</h2>
    <a href="addEmployee.php" class="btn btn-success my-3">
        Chi tiết
    </a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Mã bài thi</th>
                <th scope="col">Tên bài thi</th>
                <th scope="col">Ngày thi</th>
                <th scope="col">Thời gian làm bài</th>
                <th scope="col">Số câu hỏi</th>
                <th scope="col">Điểm mỗi câu trả lời đúng</th>
                <th scope="col">Ngày làm bài thi</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Mã truy cập bài thi</th>
                <th scope="col">Thêm thông tin</th>
                <th scope="col">Sửa thông tin</th>
                <th scope="col">xóa thông tin</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Tạo kết nối SQL
                include './config.php';
                include './header.php';
                // Thực hiện truy vấn
                $sql = "SELECT * FROM exams";
              $result = mysqli_query($con, $sql);

                // Xử lí kết quả
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                           echo '<th scope="row">'.$row['ID'].'</th>';
                          echo  '<td>'.$row['exam_title'].'</td>';
                           echo '<td>'.$row['exam_datetime'].'</td>';
                           echo '<td>'.$row['duration'].'</td>';
                           echo '<td>'.$row['total_question'].'</td>';
                           echo '<td>'.$row['marks_per_right_answer'].'</td>';
                           echo '<td>'.$row['created_on'].'</td>';
                           echo '<td>'.$row['status'].'</td>';
                            echo'<td>'.$row['exam_code'].'</td>';
                           echo '<td>
                            <a href="add.php?id='.$row['ID'].'" class="text-warning">
                            <i class="fas fa-user-plus"></i>
                            </a>
                        </td>';
                            echo '<td>
                                <a href="form_edit.php?id='.$row['ID'].'" class="text-warning">
                                    <i class="fas fa-user-edit"></i>
                                </a>
                            </td>';
                           echo '<td>
                                <a href="Delete.php?id='.$row['ID'].'" class="text-secondary">
                                    <i class="fas fa-user-minus"></i>
                                </a>
                            </td>';
                       echo '</tr>';
                    }
                }
            ?>
        </tbody>
    </table>
</main>
