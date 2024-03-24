<?php
require_once('../Model/config.php');
// require_once('header.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-v4XP2RE40VU3HIKdWvxzN0RR6gaHyCZcpX68eBnYW2qGFcuP6PFuZnftN+UrjslRUL8MWXNp0OF4RQMyDw2Bpw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="./style/News.css">
    <style>
        .gioi_tinh{
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
      require_once("header.php");
      ?>
    </div>
    <!-- header -->
    <div class="register" style="padding-top : 100px;">
        <div class="reg-l">
            <div class="r-gioithieu">PRIME FITNESS - NƠI BẠN THUỘC VỀ. <br>TRẢI NGHIỆM <br>MIỄN PHÍ NGAY!</div>
            <div class ="r-intro">Hãy thử điều gì đó mới mẻ trong năm nay bằng cách 
                tham gia thế giới trải nghiệm thú vị và vui nhộn từ chúng tôi. 
                 Chúng tôi cung cấp DÙNG THỬ MIỄN PHÍ 7 ngày cho tất cả khách mới.
                  Để lại thông tin của bạn bên cạnh và chúng tôi sẽ liên hệ với bạn 
                  trong 24 giờ tới
            </div>
        </div>
        <div class="reg-r">
            <div class="form-r">
            <form action="../Model/register_process.php" method="post">
                <input required name = "username" type="text" placeholder="Name*">
                <input required name = "address" type="text" placeholder="Address*">
                <input required name = "birthday" type="date" placeholder="Birthday*">
                <select class="gioi_tinh" id="sex" name="sex">
                    <option value="Male">Nam</option>
                    <option value="Female">Nữ</option>
                    <option value="Other">Khác</option>
                </select>
                <input required name = "email" type="email" placeholder="Email">
                <input required name = "phonenumber" type="text" placeholder="Phone*">
                <input required name = "password" type="password" placeholder="Password*">
                <div class="button-register">
                     <button>Register</button>
                     <button style="background-color:gray;float:right;"><a href="Login.php" style="color:white;">Back to Login</a></button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- footer -->
  <?php require_once('footer.php'); ?>
</body>
<script src="Forward.js"></script>
</html>
