<?php include('./header-footer/header.php'); ?>

<?php include('./config/config.php');


        $id = $_GET['id'];
        $sql2 = "SELECT * FROM exams where id = '$id'";
        $res2 = mysqli_query($conn,$sql2);
        $row2 = mysqli_fetch_assoc($res2);
        $exam_title = $row2['exam_title'];
        $exam_datetime = $row2['exam_datetime'];
        $duration = $row2['duration'];
        $total_question = $row2['total_question'];
        $marks_per_right_answer = $row2['marks_per_right_answer'];
        $created_on = $row2['created_on'];
        $status = $row2['status'];
        $exam_code = $row2['exam_code'];
?>
<form action="" method="post">
    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Mã bài thi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="id" value =<?php echo $id;?>>
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Tên bài thi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="exam_title" value =<?php echo $exam_title;?>>
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Thời gian làm bài</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="duration" value =<?php echo $duration;?>>
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Ngày thi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="exam_datetime" placeholder="YYYY-MM-DD" value =<?php echo $exam_datetime;?>>
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Số câu hỏi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="total_question" value =<?php echo $total_question;?>>
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Điểm cho mỗi câu trả lời đúng</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="marks_per_right_answer" value =<?php echo $marks_per_right_answer;?>>
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Ngày tạo bài thi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="created_on" value =<?php echo $created_on;?>>
        </div>
    </div>
  
    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Trạng thái</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="status" value =<?php echo $status;?>>
        </div>
    </div>
  <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Mã truy cập bài thi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="exam_code" value =<?php echo $exam_code;?>>
        </div>
    </div>
    <div class="form-group row">
        <label for="saveBtn" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <button type="submit" name="Save" class="btn btn-success">Lưu lại</button>
        </div>
    </div>
</form>





?>
<?php include('./header-footer/footer.php'); ?>