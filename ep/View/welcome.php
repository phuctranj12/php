<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        .container{
            padding : 65px 0 0 0;
            background-color: black;
            color: white;
        }
        .container .xinchao{
            padding-top: 50px;
            text-align: center;
            font-size: 30px;
        }
        .container .welcome-main{
            display: flex;
            justify-content: space-between;
            padding-top: 100px;
            padding-bottom: 100px;
            padding-left: 30%;
            padding-right: 30%;
        }
        .button {
            background-color: red;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 20px;
        }
    </style>
</head>
<body>            <!-- header -->
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
    <div class="container">
        <div class="xinchao">
        <?php
            session_start();
            if(isset($_SESSION['username'])) {
                echo "<h2>Welcome ".$_SESSION['username']."</h2>";
            } else {
                echo "<h2>Welcome</h2>";
            }
            var_dump($_COOKIE["user_id"]);
            var_dump($_COOKIE["ten"]);
        ?>
        </div>
          <div class="welcome-main">
            <button class="button">See all orders</button>
            <button class="button">Order PT</button>
          </div>
    </div>
    <?php require_once("footer.php"); ?>
</body>
</html>