<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ's</title>
    <link rel="stylesheet" href="./style/FAQ.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
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
    <div class="faq-main-body-container" style="padding-top:100px">
        <div class="faq-content-container">
            <div class="faq-left-container">
                <img src="../View/assets/faq.jpg" alt="faq image" draggable="false" class="faq-img">
                <h1 class="faq-main-title">Frequent Asked Questions</h1>
            </div>
            <div class="faq-right-container">
                <ul class="faq-list-questions">
                </ul>
            </div>
        </div>

    </div>
    <?php require_once('footer.php'); ?>
    <script src="../View/js/FAQ.js"></script>
</body>

</html>