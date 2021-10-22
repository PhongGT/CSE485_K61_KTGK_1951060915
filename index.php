<?php include('./header-footer/header.php'); ?>


        <div style="width:100% ; overflow:auto ; height:auto">
            <table class="table" id="table_Emp">
                <thead>
                    <tr>
                        <th scope="col">Mã bài thi</th>
                        <th scope="col">Tên bài thi</th>
                        <th scope="col">Thời gian làm bài</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include('./config/config.php');
                     $sql = "SELECT id,exam_title,duration FROM exams";
                     $result = mysqli_query($conn,$sql);
                     if(mysqli_num_rows($result)>0){
                         while($row=mysqli_fetch_assoc($result)){
                                    echo'<tr>';
                                    echo '<th scope="row">'.$row['id'].'</th>';
                                    echo '<td>'.$row['exam_title'].'</td>';
                                    echo '<td>'.$row['duration'].'</td>';
                                    echo '<td><a href="View.php?id='.$row['id'].'">Chi tiết</a></td>';
                                    echo '</tr>';

                         }
                        }
                    ?>
                </tbody>    
            </table>  
        </div>
<?php include('./header-footer/footer.php'); ?>