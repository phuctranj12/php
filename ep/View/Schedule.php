<?php
require_once('../Model/config.php');
require_once('../Model/lich.php');
$schedule = new Schedule($pdo);
$all_schedules =$schedule->getScheduleTable();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Schedule</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-v4XP2RE40VU3HIKdWvxzN0RR6gaHyCZcpX68eBnYW2qGFcuP6PFuZnftN+UrjslRUL8MWXNp0OF4RQMyDw2Bpw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="./style/News.css">
    <style>
    .lichtap-head{
    color: white;
    font-size: 40px;
    font-weight: bold;
    text-align: center;
    padding : 50px 0 0 0;
}
.lichtap-main{
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
    <div class="lichtap" style="padding-top : 200px;">
        <div class ="lichtap-head">OUR SCHEDULE</div>
        <div class ="lichtap-main">
        <table>
            <thead>
            <tr>
                <th>Class Title</th>
                <th>Description</th>
                <th>Available</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Max capacity</th>
                <th>Date</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($all_schedules as $scheduleItem): ?>
                <tr>
                <td><?php echo $scheduleItem['class_title']; ?></td>
                <td style="padding-left: 10px;text-align: left;"><?php echo $scheduleItem['description']; ?></td>
                <td><?php echo $scheduleItem['available'] ? 'Yes' : 'No'; ?></td>
                <td><?php echo $scheduleItem['start_time']; ?></td>
                <td><?php echo $scheduleItem['end_time']; ?></td>
                <td><?php echo $scheduleItem['max_capacity']; ?></td>
                <td><?php echo $scheduleItem['date']; ?></td>
                </tr>
            <?php endforeach; ?>
             </tbody>
        </table>
        </div>
    </div>
    <div class="tieuchuan">
        <div class="tieuchuan-left">
        <div class="gioithieu">KHÔNG GIỚI HẠN CHƯƠNG TRÌNH TẬP LUYỆN</div>
        <div class="intro">
        Tiếp cận hơn 37 Câu lạc bộ trên toàn quốc tại những vị trí thuận tiện nhất, được trang bị đầy đủ thiết bị cao cấp Technogym, phòng xông hơi khô, phòng thay đồ sang trọng, hồ bơi, bể jacuzzi, phòng chờ VIP, quầy bar nước trái cây và hơn thế nữa.
        </div>
        <div class="read-more">
          <a href="Class.php">
            <span>Tìm hiểu về các lớp học</span>
            <img src="../View/assets/vector1.svg"/>
          </a>
        </div>
        </div>
        <div class="tieuchuan-right">
            <img src="../View/assets/phongtap7.jpg">
        </div>
    </div>
    <div class="register" style="padding :0px 0  100px 0;">
        <div class="reg-l">
            <div class="r-gioithieu">Đăng ký tập thử miễn phí</div>
            <div class ="r-intro">
            Hãy để lại thông tin để nhận tư vấn chi tiết về chương trình
            hội viên tại Prime Fitness và ưu đãi “Tập thử miễn phí” ngay hôm nay! 
            (Khi phát sinh thanh toán, vui lòng chỉ thanh toán cho công ty Prime Fitness ,
             không giao dịch hay chuyển khoản vào tài khoản không phải của Công ty Prime Fitness)
            </div>
        </div>
        <div class="reg-r">
            <div class="form-r" style="margin-top : 100px;">
            <form>
                <input required name = "username" type="text" placeholder="Họ và tên*">
                <input required name = "phonenumber" type="text" placeholder="Số điện thoại*">
                <input required name = "email" type="email" placeholder="Email">
                <div class="button-register">
                     <button onclick="">Đăng ký</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- footer -->
  <?php require_once('footer.php'); ?>
</body>
<script src="/View/js/Forward.js"></script>
</html>
<!-- Tiếp cận hơn 37 Câu lạc bộ trên toàn quốc tại những vị trí thuận tiện nhất, được trang bị đầy đủ thiết bị cao cấp Technogym, phòng xông hơi khô, phòng thay đồ sang trọng, hồ bơi, bể jacuzzi, phòng chờ VIP, quầy bar nước trái cây và hơn thế nữa.-->