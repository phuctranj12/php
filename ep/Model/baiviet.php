<?php
require_once 'config.php';

class Article {
    private $pdo;

    function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Hàm thêm bài viết mới
    function addArticle($title, $content, $author_id) {
        try {
            $created_at = date("Y-m-d H:i:s");
            $updated_at = date("Y-m-d H:i:s");

            $stmt = $this->pdo->prepare("INSERT INTO articles (title, content, author_id, created_at, updated_at) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$title, $content, $author_id, $created_at, $updated_at]);
            return true;
        } catch(PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }

    // Hàm cập nhật thông tin bài viết
    function updateArticle($article_id, $title, $content, $author_id) {
        try {
            $updated_at = date("Y-m-d H:i:s");

            $stmt = $this->pdo->prepare("UPDATE articles SET title = ?, content = ?, author_id = ?, updated_at = ? WHERE article_id = ?");
            $stmt->execute([$title, $content, $author_id, $updated_at, $article_id]);
            return true;
        } catch(PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }

    // Hàm xoá bài viết
    function deleteArticle($article_id) {
        try {
            $stmt = $this->pdo->prepare("DELETE FROM articles WHERE article_id = ?");
            $stmt->execute([$article_id]);
            return true;
        } catch(PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }

    // Hàm lấy tất cả bài viết
    public function selectAll() {
        try {
            $stmt = $this->pdo->query("SELECT * FROM articles");
            return $stmt->fetchAll();
        } catch(PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }

    // Hàm lấy thông tin bài viết theo ID
    public function select($article_id) {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM articles WHERE article_id = ?");
            $stmt->execute([$article_id]);
            return $stmt->fetchAll();
        } catch(PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }
}
?>
