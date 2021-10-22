<?php include('./header-footer/header.php'); ?>
        <a href="./add-exam.php" class="btn-primary">Add Exam</a>

        
        <div style="width:100% ; overflow:auto ; height:auto">
            <table class="table" id="table_Emp">
                <thead>
                    <tr>
                        <th scope="col">Mã bài thi</th>
                        <th scope="col">Tên bài thi</th>
                        <th scope="col">Ngày thi</th>
                        <th scope="col">Thời gian làm bài</th>
                        <th scope="col">Số câu hỏi</th>
                        <th scope="col">Điểm cho mỗi câu trả lời đúng</th>
                        <th scope="col">Ngày tạo bài thi</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Mã truy cập bài thi</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include('./config/config.php');
                            $id = $_GET['id'];
                     $sql = "SELECT * FROM exams where id = '$id'";
                     $result = mysqli_query($conn,$sql);
                     if(mysqli_num_rows($result)>0){
                         while($row=mysqli_fetch_assoc($result)){
                                    $status = $row['status'];
                                    echo'<tr>';
                                    echo '<th scope="row">'.$row['id'].'</th>';
                                    echo '<td>'.$row['exam_title'].'</td>';
                                    echo '<td>'.$row['exam_datetime'].'</td>';
                                    echo '<td>'.$row['duration'].'</td>';
                                    echo '<td>'.$row['total_question'].'</td>';
                                    echo '<td>'.$row['marks_per_right_answer'].'</td>';
                                    echo '<td>'.$row['created_on'].'</td>';
                                    echo '<td>'.$row['exam_code'].'</td>';
                                    echo '<td>';
                                        if($status=="Completed")
                                        {
                                            echo "<label>$status</label>";
                                        }
                                        elseif($status=="Created")
                                        {
                                            echo "<label style='color: orange;'>$status</label>";
                                        }
                                        elseif($status=="Started")
                                        {
                                            echo "<label style='color: green;'>$status</label>";
                                        }
                                        elseif($status=="Pending")
                                        {
                                            echo "<label style='color: red;'>$status</label>";
                                        }
                                    echo '</td>';
                                    echo '<td><a href="update.php?id='.$row['id'].'">Sửa</a><a href="delete.php?id='.$row['id'].'">Xóa</a></td>';
                                    echo '</tr>';

                         }
                        }
                    ?>
                </tbody>    
            </table>  
        </div>


<?php include('./header-footer/footer.php'); ?>