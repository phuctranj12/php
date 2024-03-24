<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Primefitness</title>
<style>
  body {
    margin: 0;
    padding: 0;
  }
  .header {
    width: 100%;
    position: absolute;
    z-index: 99999;
    position: fixed;
    display: flex;
    align-items: center;
    background-color: #000;
    color: #fff;
    padding: 14px 20px;
    font-family: 'Montserrat', sans-serif;
  }
  .header .logo {
    font-style: italic;
    font-weight: bold;
    font-size: 30px;
    margin: 0 0 0 50px ;
    cursor: pointer;
  }
  .header .nav-links {
    display: flex;
    list-style-type: none;
    margin: 0;
    padding: 0 0 0 250px;
  }
  .header .nav-links li {
    margin-right: 35px;
  }
  .header .nav-links li:last-child {
    margin-right: 0;
  }
  .header .nav-links li a {
    color: #fff;
    text-decoration: none;
  }
  .header .button-header {
    background-color: red;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
</style>
</head>
<body>

<div class="header">
  <div class="logo" onclick="to_Homepage()">Primefitness</div>
  <ul class="nav-links">
    <li><a href="Aboutus.php">About Us</a></li>
    <li><a href="Class.php">Class</a></li>
    <li><a href="PT.php">PT</a></li>
    <li><a href="Schedule.php">Schedule</a></li>
    <li><a href="News.php">News</a></li>
    <li><a href="Login.php">Order</a></li>
  </ul>
  <button class="button-header" style="margin-left: 300px" onclick="to_Login()">Đăng nhập</button>
</div>
</body>
<script src="../View/js/Forward.js"></script>
</html>
