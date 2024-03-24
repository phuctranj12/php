<?php
require_once('../Model/config.php');
// require_once('header.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-v4XP2RE40VU3HIKdWvxzN0RR6gaHyCZcpX68eBnYW2qGFcuP6PFuZnftN+UrjslRUL8MWXNp0OF4RQMyDw2Bpw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="./style/Login.css">
    <style>
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
    <div class="login-contain" style="padding-top:200px;">
        <div class="login-left">
            <div class="gioithieu">
                CHÀO MỪNG BẠN<br>
                ĐẾN VỚI <br>
                PRIME FITNESS
            </div>
            <div class="intro">

            </div>
        </div>
        <div class="login-right">
        <div class="form-right">
            <form action="../Model/login_process.php" method="post">
            <input required name = "username" type="text" placeholder="Username*">
                <input required name = "password" type="password" placeholder="Password*">
                <div class="button-register">
                     <button type ="submit">Đăng nhập</button>
                     <button style="background-color:gray;float:right;"><a href="Register.php" style="color:white;text-decoration:none;">Register</a></button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <?php 
    require_once('footer.php');
    ?>
</body>
<script src="/View/js/Forward.js"></script>
</html>
