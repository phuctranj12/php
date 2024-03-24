<?php

require_once('../Model/config.php');
require_once('../Model/don.php');
$order = new Order($pdo);
$id = $_POST["id_edit"];
$a_order =$order->select($id);
var_dump($_POST["id_edit"]);
if(!empty($_POST["edit_order"])){
        $order_id = $_POST["edit_order"];
        $user_id = $_POST["user_id"];
        $pt_id = $_POST["pt_id"];
        $order_time = $_POST["order_time"];
        $note = $_POST["note"];
        $status = $_POST["status"];
        $order = new Order($pdo);
        $order-> updateOrder($order_id, $user_id, $pt_id, $order_time, $status, $note);
        header("Location: ../View/Admin_orderpt.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Order</title>
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
               <label for="user_id">User ID:</label>
               <input type="number" name="user_id" required value ="<?=$a_order[0]['user_id']?>"><br>
            </div>
            <div class>
               <label for="pt_id">PT ID:</label>
               <input type="pt_id" name="pt_id" required value ="<?=$a_order[0]['pt_id']?>"><br>
            </div>
            <div class>
               <label for="order_time">Order time :</label>
               <input type="datetime"  name="order_time" required value ="<?=$a_order[0]['order_time']?>"><br>
            </div>
            <div class>
               <label for="status">Status:</label>
               <input type="text"  name="status" required value ="<?=$a_order[0]['status']?>"><br>
            </div>
            <div class>
               <label for="note">Note:</label>
               <input type="text"  name="note" required value ="<?=$a_order[0]['note']?>"><br>
            </div>
            <input value ="<?=$a_order[0]['order_id']?>" name ="edit_order" hidden></div>
            <button type ="submit">Save changes</button>
        </div>
    </form>
</body>
</html>
