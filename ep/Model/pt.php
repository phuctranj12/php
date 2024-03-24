<?php

require_once 'config.php'; // Đảm bảo rằng bạn đã tạo và định nghĩa $pdo trong file config.php

class PT {
    private $pdo;

    // Constructor nhận kết nối PDO từ config.php
    function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Hàm thêm PT mới
    function addPT($class_id, $full_name, $email, $phone, $bio, $specialty, $available_hours) {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO pt (class_id, full_name, email, phone, bio, specialty, available_hours) VALUES (:class_id, :full_name, :email, :phone, :bio, :specialty, :available_hours)");
            $stmt->bindParam(':class_id', $class_id);
            $stmt->bindParam(':full_name', $full_name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':bio', $bio);
            $stmt->bindParam(':specialty', $specialty);
            $stmt->bindParam(':available_hours', $available_hours);
            $stmt->execute();
            return true;
        } catch(PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }

    // Hàm cập nhật thông tin PT
    function updatePT($pt_id, $class_id, $full_name, $email, $phone, $bio, $specialty, $available_hours) {
        try {
            $stmt = $this->pdo->prepare("UPDATE pt SET class_id = :class_id, full_name = :full_name, email = :email, phone = :phone, bio = :bio, specialty = :specialty, available_hours = :available_hours WHERE pt_id = :pt_id");
            $stmt->bindParam(':pt_id', $pt_id);
            $stmt->bindParam(':class_id', $class_id);
            $stmt->bindParam(':full_name', $full_name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':bio', $bio);
            $stmt->bindParam(':specialty', $specialty);
            $stmt->bindParam(':available_hours', $available_hours);
            $stmt->execute();
            return true;
        } catch(PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }

    // Hàm xoá PT
    function deletePT($pt_id) {
        try {
            $stmt = $this->pdo->prepare("DELETE FROM pt WHERE pt_id = :pt_id");
            $stmt->bindParam(':pt_id', $pt_id);
            $stmt->execute();
            return true;
        } catch(PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }

    // Lấy tất cả các PT
    public function selectall() {
        $stmt = $this->pdo->query("SELECT * FROM pt");
        return $stmt->fetchAll();
    }

    // Lấy thông tin của một PT cụ thể
    public function select($pt_id) {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM pt WHERE pt_id = :pt_id");
            $stmt->bindParam(':pt_id', $pt_id);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch(PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }
}
?>
