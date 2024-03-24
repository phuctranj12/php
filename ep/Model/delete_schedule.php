<?php
require_once('config.php');
require_once('lich.php');
$schedule = new Schedule($pdo);
if(!empty($_GET["id_delete"])){
    $id = $_GET["id_delete"];
    $schedule->deleteSchedule($id);
    header('Location: ../View/Admin_schedule.php');
}
?>
