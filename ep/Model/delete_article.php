<?php
require_once('config.php');
require_once('baiviet.php');
$article = new Article($pdo);
if(!empty($_POST["id_delete"])){
    $id = $_POST["id_delete"];
    $article->deleteArticle($id);
    header('Location: ../View/Admin_article.php');
}
?>
