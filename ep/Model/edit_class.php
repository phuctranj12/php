<?php

require_once('../Model/config.php');
require_once('../Model/lop.php');
$class = new Lop($pdo);
$id = $_POST["id_edit"];
$a_class =$class->select($id);
var_dump($_POST["id_edit"]);
if(!empty($_POST["edit_class"])){
        $class_id = $_POST["edit_class"];
        $title = $_POST["title"];
        $description = $_POST["description"];
        $max_capacity = $_POST["max_capacity"];
        $start_time = $_POST["start_time"];
        $end_time = $_POST["end_time"];
        $class = new Lop($pdo);
        $class->updateClass($class_id, $title, $max_capacity, $description, $start_time, $end_time);
        header("Location: ../View/Admin_class.php");
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
    <form method ="post">
    <div class ="">
            <div class>
               <label for="title">Title:</label>
               <input type="text" name="title" required value ="<?=$a_class[0]['title']?>"><br>
            </div>
            <div class>
               <label for="description">Description:</label>
               <input type="text" name="description" required value ="<?=$a_class[0]['description']?>"><br>
            </div>
            <div class>
               <label for="max_capacity">Max capacity:</label>
               <input type="number"  name="max_capacity" required value ="<?=$a_class[0]['max_capacity']?>"><br>
            </div>
            <div class>
               <label for="start_time">Start time</label>
               <input type="time"  name="start_time" required value ="<?=$a_class[0]['start_time']?>"><br>
            </div>
            <div class>
               <label for="end_time">End time:</label>
               <input type="time"  name="end_time" required value ="<?=$a_class[0]['end_time']?>"><br>
            </div>
            <input value ="<?=$a_class[0]['class_id']?>" name ="edit_class" hidden></div>
            <button type ="submit">Save changes</button>
        </div>
    </form>
</body>
</html>
