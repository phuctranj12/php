<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Policy</title>
    <link rel="stylesheet" href="./style/Policy.css">
 
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
    <div class="policy-main-container" style="padding-top : 100px;">
        <div class="policy-side-bar">
            <div class="policy-list">
                <a href="?t=term-of-service">Các điều khoản dịch vụ</a>
                <a href="?t=privacy">Chính sánh quyền riêng tư</a>
                <a href="?t=community">Chính sách cộng đồng</a>
                <a href="?t=advertise">Quảng cáo</a>
                <a href="?t=copyright">Chính sách bản quyền</a>
                <a href="?t=transparency">Chính sách về tính minh bạch</a>
            </div>
        </div>
        <div class="policy-main-view">
            <h1>Các chính sách của Prime Fitness</h1>
            <p class="policy-default">Vui lòng đọc các chính sách mà chúng tôi đưa ra để có thể sử dụng dịch vụ của Prime Fitness một cách thoải mái nhất</p>
            <p class="policy-default">Mọi thắc mắc về các chính sách này, hãy liên hệ tới 1900 9999 để được trợ giúp thêm.</p>
        </div>
    </div>
    <div class="dongke"style="padding-top : 50px;" >
    <hr style="margin-top : 20px;width:70%;" >
    </div>
    <?php 
        require_once('footer.php')
    ?>
    <script src="../View/js/Policy.js"></script>
</body>
</html>