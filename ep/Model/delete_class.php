<?php
require_once('config.php');
require_once('lop.php');
$class = new Lop($pdo);
if(!empty($_POST["id_delete"])){
    $id = $_POST["id_delete"];
    $class->deleteClass($id);
    header('Location: ../View/Admin_class.php');
}
?>
