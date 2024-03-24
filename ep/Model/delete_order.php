<?php
require_once('config.php');
require_once('don.php');
$order = new Order($pdo);
if(!empty($_POST["id_delete"])){
    $id = $_POST["id_delete"];
    $order->deleteOrder($id);
    header('Location: ../View/Admin_orderpt.php');
}
?>
