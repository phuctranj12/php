<?php
// Include file config.php và lich.php
require_once('../Model/config.php');
require_once('../Model/lich.php');

// Tạo đối tượng Schedule
$schedule = new Schedule($pdo);
if(!empty($_GET["add_schedule"])){
    $date = $_GET["date"];
    $class_id = $_GET["class_id"];
    $available = $_GET["available"];
    $schedule = new Schedule($pdo);
    $schedule->addSchedule($date, $class_id, $available);
}
$all_schedules =$schedule->selectall();


// Thêm lịch tập mới
// $schedule->addSchedule(7,'2024-03-18', 14, true);
// Em test thấy okk r 
// khi nào !empty($_POST)  thì mình gọi tương đưuong với các hàm Thêm ,Sửa , Xoá 

// Hiển thị lịch tập trước khi sửa và xoá
// echo "Danh sách lịch tập trước khi sửa và xoá:<br>";
// $all_schedules =$schedule->select();
// foreach ($all_schedules as $schedule) {
//     echo "ID: " . $schedule['schedule_id'] . ", Date: " . $schedule['date'] . ", Class ID: " . $schedule['class_id'] . ", Available: " . $schedule['available'] . "<br>";
// }

// Sửa 
// $schedule->updateSchedule(3, '2024-03-19', 15, false);

// Xoá 
// $schedule->deleteSchedule(2);

// Hiển thị lịch tập sau khi sửa và xoá
// echo "<br>Danh sách lịch tập sau khi sửa và xoá:<br>";
// $all_schedules =$schedule->select();
// foreach ($all_schedules as $schedule) {
//     echo "ID: " . $schedule['schedule_id'] . ", Date: " . $schedule['date'] . ", Class ID: " . $schedule['class_id'] . ", Available: " . $schedule['available'] . "<br>";
// }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage schedule</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-v4XP2RE40VU3HIKdWvxzN0RR6gaHyCZcpX68eBnYW2qGFcuP6PFuZnftN+UrjslRUL8MWXNp0OF4RQMyDw2Bpw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <style>
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
</head>
<body>
    <form method ="get">
        <div class ="">
            <div class>
            <label>Ngày :</label>
            <input required type="date" name ="date" />
            </div>
            <div class>
            <label>ID lớp học:</label>
            <input required type="number" name ="class_id" />
            </div>
            <div class>
            <label>Tình trạng:</label>
            <!-- <input type="checkbox" name ="available" value="1" />
            Có
            <input type="checkbox" name ="available" value="0"/>`
            Không -->
            <input required type="radio" id="option1" name="available" value="1">
            <label for="option1">Có hoạt động</label><br>
            <input required type="radio" id="option0" name="available" value="0">
            <label for="option0">Không hoạt động</label><br>
            </div>
            <input value =1 name ="add_schedule"></div>
            <button type ="submit">Add</button>
        </div>
    </form>
        <div class="container">
            <div class="card">
                <div class="card-header bg-primary" style="color:white;">
                    Danh sách lịch tập
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Mã lịch</th>
                                <th>Ngày</th>
                                <th>Mã Lớp</th> 
                                <th>Tình trạng hoạt động</th>  
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $cnt = 0;
                            foreach ($all_schedules as $s) {
                                echo '<tr>
                                    <td>'.(++$cnt).'</td>
                                    <td>'.$s['schedule_id'].'</td>
                                    <td>'.$s['date'].'</td>
                                    <td>'.$s['class_id'].'</td>
                                    <td>'.$s['available'].'</td>
                                    <td>
                    <form method="get" action ="../Model/edit_schedule.php">
                    <input  value='.$s['schedule_id'].' name = "id_edit"  >
                   <button name ="edit" type="submit" class="btn btn-warning">Edit</button>
                    </form>
                    <form method="get" action ="../Model/delete_schedule.php" >
                    <input value='.$s['schedule_id'].' name ="id_delete" >
                    <button name ="delete"  class="btn btn-danger" type="submit" onclick="confirmDelete(<?php echo $s['."schedule_id".']; ?>)">Delete</button>
                    </form>
                                   </td>
                                </tr>';
                            }
                            $cnt ++;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>
</html>
