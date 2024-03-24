<?php

class Schedule {
    private $pdo;

    // Constructor nhận kết nối PDO từ config.php
    function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Hàm thêm lịch tập mới
    function addSchedule($date, $class_id, $available) {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO schedule ( date, class_id, available) VALUES (:date, :class_id, :available)");
            $stmt->bindParam(':date', $date);
            $stmt->bindParam(':class_id', $class_id);
            $stmt->bindParam(':available', $available);
            $stmt->execute();
            return true;
        } catch(PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }

    // Hàm cập nhật thông tin lịch tập
    function updateSchedule($schedule_id, $date, $class_id, $available) {
        try {
            $stmt = $this->pdo->prepare("UPDATE schedule SET date = :date, class_id = :class_id, available = :available WHERE schedule_id = :schedule_id");
            $stmt->bindParam(':schedule_id', $schedule_id);
            $stmt->bindParam(':date', $date);
            $stmt->bindParam(':class_id', $class_id);
            $stmt->bindParam(':available', $available);
            $stmt->execute();
            return true;
        } catch(PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }

    // Hàm xoá lịch tập
    function deleteSchedule($schedule_id) {
        try {
            $stmt = $this->pdo->prepare("DELETE FROM schedule WHERE schedule_id = :schedule_id");
            $stmt->bindParam(':schedule_id', $schedule_id);
            $stmt->execute();
            return true;
        } catch(PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }
    public function selectall() {
        $stmt = $this->pdo->query("SELECT * FROM schedule");
        return $stmt->fetchAll();
    }
    public function select($schedule_id) {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM schedule WHERE schedule_id = :schedule_id");
            $stmt->bindParam(':schedule_id', $schedule_id);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch(PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }
    public function getScheduleTable() {
        try {
            $stmt = $this->pdo->query("SELECT classes.title AS class_title,classes.description,schedule.available, classes.end_time, classes.start_time, classes.max_capacity,schedule.date FROM schedule INNER JOIN classes ON schedule.class_id = classes.class_id");
            return $stmt->fetchAll();
        } catch(PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }
    
    
}

?>
