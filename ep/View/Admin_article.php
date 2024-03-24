<?php
// Include file config.php và lich.php
require_once('../Model/config.php');
require_once('../Model/baiviet.php');

// Tạo đối tượng Schedule
$article = new Article($pdo);
if(!empty($_POST["add_article"])){
        $title = $_POST["title"];
        $content = $_POST["content"];
        $author_id = $_POST["author_id"];
        $article = new Article($pdo);
        $article->addArticle($title, $content, $author_id);
}
$all_article =$article->selectall();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage article</title>
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
            <input required type="text" id="title" name="title">
            </div>
            <div class>
            <label>Content:</label>
            <textarea required id="content" name="content"></textarea>
            </div>
            <div class>
            <label>Author ID:</label>
            <input required type="text" id="author_id" name="author_id">
            </div>
            <input value =1 name ="add_article" hidden></div>
            <button type ="submit">Add</button>
        </div>
    </form>
        <div class="container">
            <div class="card">
                <div class="card-header bg-primary" style="color:white;">
                    Danh sách bài viết
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Author ID</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $cnt = 0;
                            foreach ($all_article as $a) {
                                echo '<tr>
        <td>'.(++$cnt).'</td>
        <td>'.$a['title'].'</td>
        <td>'.$a['content'].'</td>
        <td>'.$a['author_id'].'</td>
        <td>
            <form method="post" action="../Model/edit_article.php">
                <input value="'.$a['article_id'].'" name="id_edit" hidden>
                <button name="edit" type="submit" class="btn btn-warning">Edit</button>
            </form>
            <form method="post" action="../Model/delete_article.php">
                <input value="'.$a['article_id'].'" name="id_delete" hidden>
                <button name="delete" class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
      </tr>';

                            }
                            $cnt ++;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>
</html>
