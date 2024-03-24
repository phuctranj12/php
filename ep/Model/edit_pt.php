<?php
require_once('../Model/config.php');
require_once('../Model/pt.php');
$pt= new PT($pdo);
$id = $_POST["id_edit"];
$a_pt =$pt->select($id);
if(!empty($_POST["edit_pt"])){
        $pt_id = $_POST["edit_pt"];
        $full_name = $_POST["full_name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $bio = $_POST["bio"];
        $specialty = $_POST["specialty"];
        $available_hours = $_POST["available_hours"];
        $class_id = $_POST["class_id"];
        $pt= new PT($pdo);
        $pt->updatePT($pt_id, $class_id, $full_name, $email, $phone, $bio, $specialty, $available_hours);
        header("Location: ../View/Admin_pt.php");
}
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
               <input type="text" name="full_name" required value ="<?=$a_pt[0]['full_name']?>"><br>
            </div>
            <div class>
               <label for="email">Email:</label>
               <input type="email" name="email" required value ="<?=$a_pt[0]['email']?>"><br>
            </div>
            <div class>
               <label for="phone">Phone number:</label>
               <input type="tel"  name="phone" required value ="<?=$a_pt[0]['phone']?>"><br>
            </div>
            <div class>
               <label for="bio">Biography:</label>
               <input type="text"  name="bio" required value ="<?=$a_pt[0]['bio']?>"><br>
            </div>
            <div class>
               <label for="specialty">Specialty:</label>
               <input type="text"  name="specialty" required value ="<?=$a_pt[0]['specialty']?>"><br>
            </div>
            <div class>
               <label for="available_hours">Available hours:</label>
               <input type="text"  name="available_hours" required value ="<?=$a_pt[0]['available_hours']?>"><br>
            </div>
            <div class>
               <label for="class_id">Class ID:</label>
               <input type="number"  name="class_id" required value ="<?=$a_pt[0]['class_id']?>"><br>
            </div>
            <input value ="<?=$a_pt[0]["pt_id"]?>" name ="edit_pt" hidden></div>
            <button type ="submit">Save changes</button>
        </div>
    </form>
</body>
</html>
