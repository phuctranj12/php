<?php

require_once 'config.php'; // Đảm bảo rằng bạn đã tạo và định nghĩa $pdo trong file config.php

class Lop {
    private $pdo;

    // Constructor nhận kết nối PDO từ config.php
    function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Hàm thêm lớp mới
    function addClass($title, $max_capacity, $description, $start_time, $end_time) {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO classes (title, max_capacity, description, start_time, end_time) VALUES (:title, :max_capacity, :description, :start_time, :end_time)");
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':max_capacity', $max_capacity);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':start_time', $start_time);
            $stmt->bindParam(':end_time', $end_time);
            $stmt->execute();
            return true;
        } catch(PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }

    // Hàm cập nhật thông tin lớp
    function updateClass($class_id, $title, $max_capacity, $description, $start_time, $end_time) {
        try {
            $stmt = $this->pdo->prepare("UPDATE classes SET title = :title, max_capacity = :max_capacity, description = :description, start_time = :start_time, end_time = :end_time WHERE class_id = :class_id");
            $stmt->bindParam(':class_id', $class_id);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':max_capacity', $max_capacity);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':start_time', $start_time);
            $stmt->bindParam(':end_time', $end_time);
            $stmt->execute();
            return true;
        } catch(PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }

    // Hàm xoá lớp
    function deleteClass($class_id) {
        try {
            $stmt = $this->pdo->prepare("DELETE FROM classes WHERE class_id = :class_id");
            $stmt->bindParam(':class_id', $class_id);
            $stmt->execute();
            return true;
        } catch(PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }

    // Lấy tất cả các lớp
    public function selectall() {
        $stmt = $this->pdo->query("SELECT * FROM classes");
        return $stmt->fetchAll();
    }

    // Lấy thông tin của một lớp cụ thể
    public function select($class_id) {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM classes WHERE class_id = :class_id");
            $stmt->bindParam(':class_id', $class_id);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch(PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }
}
?>

