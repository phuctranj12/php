<?php

require_once('../Model/config.php');
require_once('../Model/pt.php');


$pt= new PT($pdo);

if(!empty($_POST["add_pt"])){
        $full_name = $_POST["full_name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $bio = $_POST["bio"];
        $specialty = $_POST["specialty"];
        $available_hours = $_POST["available_hours"];
        $class_id = $_POST["class_id"];
        $pt= new PT($pdo);
        $pt->addPT($class_id, $full_name, $email, $phone, $bio, $specialty, $available_hours);
}
$all_pt =$pt->selectall();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage PT</title>
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
               <label for="full_name">Fullname:</label>
               <input type="text" name="full_name" required><br>
            </div>
            <div class>
               <label for="email">Email:</label>
               <input type="email" name="email" required><br>
            </div>
            <div class>
               <label for="phone">Phone number:</label>
               <input type="tel"  name="phone" required><br>
            </div>
            <div class>
               <label for="bio">Biography:</label>
               <input type="text"  name="bio" required><br>
            </div>
            <div class>
               <label for="specialty">Specialty:</label>
               <input type="text"  name="specialty" required><br>
            </div>
            <div class>
               <label for="available_hours">Available hours:</label>
               <input type="text"  name="available_hours" required><br>
            </div>
            <div class>
               <label for="class_id">Class ID:</label>
               <input type="number"  name="class_id" required><br>
            </div>
            <input value =1 name ="add_pt" hidden></div>
            <button type ="submit">Add</button>
        </div>
    </form>
        <div class="container">
            <div class="card">
                <div class="card-header bg-primary" style="color:white;">
                    PT list
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>PT ID</th>
                                <th>Fullname</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Biography</th>
                                <th>Specialty</th>
                                <th>Available hours</th>
                                <th>CLass ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $cnt = 0;
                            foreach ($all_pt as $p) {
                                echo '<tr>
        <td>'.(++$cnt).'</td>
        <td>'.$p['pt_id'].'</td>
        <td>'.$p['full_name'].'</td>
        <td>'.$p['email'].'</td>
        <td>'.$p['phone'].'</td>
        <td>'.$p['bio'].'</td>
        <td>'.$p['specialty'].'</td>
        <td>'.$p['available_hours'].'</td>
        <td>'.$p['class_id'].'</td>
        <td>
            <form method="post" action="../Model/edit_pt.php">
                <input value="'.$p['pt_id'].'" name="id_edit" hidden>
                <button name="edit" type="submit" class="btn btn-warning">Edit</button>
            </form>
            <form method="post" action="../Model/delete_pt.php">
                <input value="'.$p['pt_id'].'" name="id_delete" hidden>
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
