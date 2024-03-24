<?php

require_once 'config.php';

class Order {
    private $pdo;

    function __construct($pdo) {
        $this->pdo = $pdo;
    }

    function addOrder($user_id, $pt_id, $status, $note) {
        try {
            $order_at = date('Y-m-d H:i:s'); // Lấy ngày và giờ hiện tại
            $stmt = $this->pdo->prepare("INSERT INTO order_pt (user_id, pt_id, order_time, status, note) VALUES (:user_id, :pt_id, :order_at, :status, :note)");
            $stmt->bindParam(':user_id', $user_id);
            $stmt->bindParam(':pt_id', $pt_id);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':note', $note);
            $stmt->bindParam(':order_at', $order_at); // Chèn thời gian hiện tại vào cột order_time
            $stmt->execute();
            return true;
        } catch(PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }

    function updateOrder($order_id, $user_id, $pt_id, $order_time, $status, $note) {
        try {
            $stmt = $this->pdo->prepare("UPDATE order_pt SET user_id = :user_id, pt_id = :pt_id, order_time = :order_time, status = :status, note = :note WHERE order_id = :order_id");
            $stmt->bindParam(':order_id', $order_id);
            $stmt->bindParam(':user_id', $user_id);
            $stmt->bindParam(':pt_id', $pt_id);
            $stmt->bindParam(':order_time', $order_time);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':note', $note);
            $stmt->execute();
            return true;
        } catch(PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }

    function deleteOrder($order_id) {
        try {
            $stmt = $this->pdo->prepare("DELETE FROM order_pt WHERE order_id = :order_id");
            $stmt->bindParam(':order_id', $order_id);
            $stmt->execute();
            return true;
        } catch(PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }

    public function selectall() {
        $stmt = $this->pdo->query("SELECT * FROM order_pt");
        return $stmt->fetchAll();
    }

    public function select($order_id) {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM order_pt WHERE order_id = :order_id");
            $stmt->bindParam(':order_id', $order_id);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch(PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }
    public function getOrderTable($id) {
        try {
            $stmt = $this->pdo->prepare("
            SELECT cu.name, cu.phoneNumber, pt.full_name, order_pt.note, order_pt.order_time, order_pt.status 
            FROM cali_user AS cu
            JOIN order_pt ON cu.id = order_pt.user_id
            JOIN pt ON pt.pt_id = order_pt.pt_id
            WHERE cu.id = :id
            "
            );
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch(PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }
    
}
?>
