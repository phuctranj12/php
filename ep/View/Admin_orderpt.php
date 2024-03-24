<?php
// Include file config.php và lich.php
require_once('../Model/config.php');
require_once('../Model/don.php');

// Tạo đối tượng Schedule
$order= new Order($pdo);

if(!empty($_POST["add_order"])){
        $user_id = $_POST["user_id"];
        $pt_id = $_POST["pt_id"];
        $status = $_POST["status"];
        $note = $_POST["note"];
        $order= new Order($pdo);
        $order->addOrder($user_id, $pt_id, $status, $note);
}
$all_order =$order->selectall();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage Order</title>
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
               <label for="user_id">User Id:</label>
               <input type="number" name="user_id" required value="1"><br>
            </div>
            <div class>
               <label for="pt_id">Pt ID:</label>
               <input type="number" name="pt_id" required><br>
            </div>
            <div class>
               <label for="status">Status</label>
               <input type="status"  name="status" required value="Đang chờ xử lý"><br>
            </div>
            <div class>
               <label for="note">Note:</label>
               <input type="text"  name="note" required><br>
            </div>
           
            <input value =1 name ="add_order" hidden></div>
            <button type ="submit">Add</button>
        </div>
    </form>
        <div class="container">
            <div class="card">
                <div class="card-header bg-primary" style="color:white;">
                    Order list
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Order ID</th>
                                <th>User ID</th>
                                <th>Order time</th>
                                <th>Status</th>
                                <th>Note</th>
                                <th>PT ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $cnt = 0;
                            foreach ($all_order as $o) {
                                echo '<tr>
        <td>' .(++$cnt).'</td>
        <td>'.$o['order_id'].'</td>
        <td>'.$o['user_id'].'</td>
        <td>'.$o['order_time'].'</td>
        <td>'.$o['status'].'</td>
        <td>'.$o['note'].'</td>
        <td>'.$o['pt_id'].'</td>
        <td>
            <form method="post" action="../Model/edit_order.php">
                <input value="'.$o['order_id'].'" name="id_edit" hidden>
                <button name="edit" type="submit" class="btn btn-warning">Edit</button>
            </form>
            <form method="post" action="../Model/delete_order.php">
                <input value="'.$o['order_id'].'" name="id_delete" hidden>
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
