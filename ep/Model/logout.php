<?php
setcookie("ten", "", time() - 3600, "/ep");
setcookie("user_id","", time() - 3600, "/ep");
header("Location: ../View/Login.php");
exit();
?>
