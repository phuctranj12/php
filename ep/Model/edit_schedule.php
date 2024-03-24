<?php
// Include file config.php và lich.php
require_once('config.php');
require_once('lich.php');

// Tạo đối tượng Schedule
$schedule = new Schedule($pdo);
$id = $_GET["id_edit"];
$a_schedules =$schedule->select($id);
var_dump($a_schedules);
if(!empty($_GET["id_schedule"])){
    $id = $_GET["id_schedule"];
    $date = $_GET["date"];
    $class_id = $_GET["class_id"];
    $available = $_GET["available"];
    $schedule->updateSchedule($id,$date, $class_id, $available);
    header("Location: ../View/Admin_schedule.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit schedule</title>
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
            <input required type="date" name ="date" value ="<?=$a_schedules[0]['date']?>" />
            </div>
            <div class>
            <label>ID lớp học:</label>
            <input required type="number" name ="class_id" value ="<?=$a_schedules[0]['class_id']?>" />
            </div>
            <div class>
            <label>Tình trạng:</label>
            <input required type="radio" id="option1" name="available" value="1" >
            <label for="option1">Có hoạt động</label><br>
            <input required type="radio" id="option0" name="available" value="0">
            <label for="option0">Không hoạt động</label><br>
            </div>
            <input value ="<?=$a_schedules[0]['schedule_id']?>" name ="id_schedule" ></div>
            <button type ="submit">Save changes</button>
        </div>

        
    </form>
</body>
</html>
