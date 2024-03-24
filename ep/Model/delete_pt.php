<?php
require_once('config.php');
require_once('pt.php');
$pt = new PT($pdo);
if(!empty($_POST["id_delete"])){
    $id = $_POST["id_delete"];
    $pt->deletePT($id);
    header('Location: ../View/Admin_pt.php');
}
?>
