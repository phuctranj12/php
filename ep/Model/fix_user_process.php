<?php
session_start();
require_once('./functions.php');
require_once('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $address = $_POST["address"];
    $birthday = $_POST["birthday"];
    $sex = $_POST["sex"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phoneNumber"];

    // Thực hiện truy vấn cập nhật thông tin người dùng
    $sql = "UPDATE cali_user SET name=?, address=?, birthday=?, sex=?, email=?, phoneNumber=? WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $address);
    $stmt->bindParam(3, $birthday);
    $stmt->bindParam(4, $sex);
    $stmt->bindParam(5, $email);
    $stmt->bindParam(6, $phoneNumber);
    $stmt->bindParam(7, $id);

    if ($stmt->execute()) {
        $_SESSION['success'] = "User information updated successfully.";
        header("Location: ../View/Admin_user.php");
        exit();
    } else {
        $_SESSION['error'] = "Error updating user information: " . $pdo->errorInfo()[2]; // Lấy thông điệp lỗi từ PDO
        header("Location: ../View/Admin_user.php");
        exit();
    }
} else {
    $_SESSION['error'] = "Invalid request.";
    header("Location: ../View/Admin_user.php");
    exit();
}
?>
