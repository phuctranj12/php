<?php

require_once('../Model/config.php');
require_once('../Model/pt.php');
require_once('../Model/don.php');
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
// order
$order= new Order($pdo);
if(!empty($_POST["add_order"])){
        $user_id = $_COOKIE["user_id"];
        $pt_id = $_POST["pt_id"];
        $status = $_POST["status"];
        $note = $_POST["note"];
        $order= new Order($pdo);
        $order->addOrder($user_id, $pt_id, $status, $note);
}
$all_order =$order->selectall();
$kh_order_table = $order->getOrderTable($_COOKIE["user_id"]);
?>

<!DOCTYPE html>
<html>
<head>
    <title>All PT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-v4XP2RE40VU3HIKdWvxzN0RR6gaHyCZcpX68eBnYW2qGFcuP6PFuZnftN+UrjslRUL8MWXNp0OF4RQMyDw2Bpw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="./style/News.css">
    <style>
    .pt-head{
    color: white;
    font-size: 40px;
    font-weight: bold;
    text-align: center;
    padding : 50px 0 0 0;
}
.pt-main{
    padding : 50px 30px 50px 30px;
    margin: auto; 
    width: 90%; 
}
table td , th{
    height : 50px;
    line-height: 1.5;
    color:white;
    width: 15%;
    border:1px solid white;
}
table td{
   text-align: center; padding:0px;
   
}
.baiviet-pt{
    display: flex;
    padding : 100px 30px 0 30px;
    gap: 20px;
}
.baiviet-pt1{
    display: flex;
    flex-direction: column;
    width : 25%;
}
.chitiet-pt1{
    color: white;
    margin-top: 20px;
    text-align: center;
    font-size: 20px;
}
.all_pts{
            margin: 50px 0 0 0;
            padding: 30px 0;
            border: none;
            border-bottom: 1px solid black;
            height: 30px;
            font-size: 15px;
            color : gray;
      
        }
    </style>
</head>
<body>
            <!-- header -->
            <div class="head-contain" style="width: 100%;">
            <?php
      if(!isset($_COOKIE["ten"])){
      require_once("header.php");}
      else{
        require_once("header2.php");
      }
      ?>
    </div>
    <!-- header -->
    <div class="pt" style="padding-top : 110px;padding-bottom:50px;">
        <div class ="pt-head">OUR PT</div>
        <div class ="pt-main">
        <table>
            <thead>
            <tr>
                <th>Fullname</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Biography</th>
                <th>Specialty</th>
                <th>Available hours</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($all_pt as $p): ?>
                <tr>
                <td><?php echo $p['full_name']?></td>
                <td><?php echo $p['email'] ?></td>
                <td><?php echo $p['phone'] ?></td>
                <td style="padding-left: 10px;text-align: left;"><?php echo $p['bio'] ?></td>
                <td><?php echo $p['specialty'] ?></td>
                <td><?php echo $p['available_hours'] ?></td>
                </tr>
            <?php endforeach; ?>
             </tbody>
        </table>
        </div>
    </div>
    
    <div class="pt" style="padding-top : 50px;padding-bottom:50px;">
        <div class ="pt-head" style="color:gray">YOUR ORDERS</div>
        <div class ="pt-main">
        <table style="width:100%;">
            <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>PT Fullname</th>
                <th>Note</th>
                <th>Order Time</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($kh_order_table as $k): ?>
                <tr>
                <td><?php echo $k['name']?></td>
                <td><?php echo $k['phoneNumber'] ?></td>
                <td><?php echo $k['full_name'] ?></td>
                <td ><?php echo $k['note'] ?></td>
                <td><?php echo $k['order_time'] ?></td>
                <td><?php echo $k['status'] ?></td>
                </tr>
            <?php endforeach; ?>
             </tbody>
        </table>
        </div>
    </div>

    <div class="order-pt">
        <div class="register" style="padding:0 0 80px 0;" >
        <div class="reg-l">
            <div class="r-gioithieu">PRIME FITNESS - NƠI BẠN THUỘC VỀ. <br>TRẢI NGHIỆM NGAY!</div>
            <div class ="r-intro">Hãy thử điều gì đó mới mẻ trong năm nay bằng cách 
                đăng ký DỊCH VỤ HUẤN LUYỆN VIÊN CÁ NHÂN của chúng tôi. Hãy để lại thông tin 
                và chúng tôi sẽ liên hệ lại với bạn trong vòng 24H để xác nhận đơn  
                đăng ký của bạn.
            </div>
        </div>
        <div class="reg-r" style="padding-top :100px;">
            <div class="form-r">
            <form method="post">
                <select class="all_pts" id="pt_id" name="pt_id">
                    <?php foreach ($all_pt as $p): ?>
                    <option value="<?=$p["pt_id"]?>"><?php echo $p['full_name']?></option>
                    <?php endforeach; ?>
                </select>
                <input required name = "status" type="text" value="Đang chờ xử lý" hidden>
                <input required name = "note" type="text" placeholder="Note*">
                <input value =1 name ="add_order" hidden></div>
                <div class="button-register">
                     <button type="submit">ADD ORDER</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- footer -->
  <?php require_once('footer.php'); ?>
</body>
<script src="/View/js/Forward.js"></script>
</html>
<!-- Tiếp cận hơn 37 Câu lạc bộ trên toàn quốc tại những vị trí thuận tiện nhất, được trang bị đầy đủ thiết bị cao cấp Technogym, phòng xông hơi khô, phòng thay đồ sang trọng, hồ bơi, bể jacuzzi, phòng chờ VIP, quầy bar nước trái cây và hơn thế nữa.-->