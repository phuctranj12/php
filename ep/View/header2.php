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
  .header .tennguoidung {
    margin-left:200px ;
    display: flex;
    color: rgb(217, 226, 255);
  }
  .header .tennguoidung svg{
    margin-left: 30px;
    width: 20px;
    height: 20px;
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
    <li><a href="Order.php">Order</a></li>
  </ul>
  <div class="tennguoidung">
  <?php
  $ten = $_COOKIE["ten"];
  echo "Hello ".$ten;
  ?>
  <svg onclick="to_logout()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
  <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
</svg>
  </div>
</div>
</body>
<script src="../View/js/Forward.js">
</script>
</html>
