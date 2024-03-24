<?php

require_once('config.php');
require_once('baiviet.php');
$article = new Article($pdo);
$id = $_POST["id_edit"];
$a_articles =$article->select($id);
var_dump($a_articles);
if(!empty($_POST["id_article"])){
    $id = $_POST["id_article"];
    $title = $_POST["title"];
    $content = $_POST["content"];
    $author_id = $_POST["author_id"];
    $article = new Article($pdo);
    $article->updateArticle($id,$title, $content, $author_id);
    header("Location: ../View/Admin_article.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit schedule</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-v4XP2RE40VU3HIKdWvxzN0RR6gaHyCZcpX68eBnYW2qGFcuP6PFuZnftN+UrjslRUL8MWXNp0OF4RQMyDw2Bpw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <style>
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
</head>
<body>
    <form method ="post">
        <div class ="">
            <div class>
            <label>Title :</label>
            <input required type="text" name ="title" value ="<?=$a_articles[0]['title']?>" />
            </div>
            <div class>
            <label>Content:</label>
            <textarea type="text" required name="content"><?=htmlspecialchars_decode($a_articles[0]['content'])?></textarea>
            </div>
            <div class>
            <label>Author ID:</label>
            <input required type="text" name ="author_id" value ="<?=$a_articles[0]['author_id']?>">
            </div>
            <input value ="<?=$a_articles[0]['article_id']?>" name ="id_article" ></div>
            <button type ="submit">Save changes</button>
        </div>
    </form>
</body>
</html>
