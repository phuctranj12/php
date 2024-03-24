<?php
// Include file config.php và lich.php
require_once('../Model/config.php');
require_once('../Model/lop.php');

// Tạo đối tượng Schedule
$class = new Lop($pdo);

if(!empty($_POST["add_class"])){
        $title = $_POST["title"];
        $description = $_POST["description"];
        $max_capacity = $_POST["max_capacity"];
        $start_time = $_POST["start_time"];
        $end_time = $_POST["end_time"];
        $class = new Lop($pdo);
        $class->addClass($title, $max_capacity, $description, $start_time, $end_time);
}
$all_class =$class->selectall();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage class</title>
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
               <input type="text" name="title" required><br>
            </div>
            <div class>
               <label for="description">Description:</label>
               <input type="text" name="description" required><br>
            </div>
            <div class>
               <label for="max_capacity">Max capacity:</label>
               <input type="number"  name="max_capacity" required><br>
            </div>
            <div class>
               <label for="start_time">Start time</label>
               <input type="time"  name="start_time" required><br>
            </div>
            <div class>
               <label for="end_time">End time:</label>
               <input type="time"  name="end_time" required><br>
            </div>
            <input value =1 name ="add_class" hidden></div>
            <button type ="submit">Add</button>
        </div>
    </form>
        <div class="container">
            <div class="card">
                <div class="card-header bg-primary" style="color:white;">
                    Class list
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Class ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>End time</th>
                                <th>Start time</th>
                                <th>Max capcity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $cnt = 0;
                            foreach ($all_class as $c) {
                                echo '<tr>
        <td>'.(++$cnt).'</td>
        <td>'.$c['class_id'].'</td>
        <td>'.$c['title'].'</td>
        <td>'.$c['description'].'</td>
        <td>'.$c['start_time'].'</td>
        <td>'.$c['end_time'].'</td>
        <td>'.$c['max_capacity'].'</td>
        <td>
            <form method="post" action="../Model/edit_class.php">
                <input value="'.$c['class_id'].'" name="id_edit" hidden>
                <button name="edit" type="submit" class="btn btn-warning">Edit</button>
            </form>
            <form method="post" action="../Model/delete_class.php">
                <input value="'.$c['class_id'].'" name="id_delete" hidden>
                <button name="delete" class="btn btn-danger" type="submit">Delete</button>
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
