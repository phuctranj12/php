<?php
session_start();
require_once('config.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $address = $_POST["address"];
    $birthday = $_POST["birthday"];
    $sex = $_POST["sex"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phoneNumber"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT); // Mã hóa mật khẩu

    try {
        // Thực hiện truy vấn để chèn dữ liệu vào cơ sở dữ liệu
        $sql = "INSERT INTO cali_user (name, address, birthday, sex, email, phoneNumber, username, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username, $address, $birthday, $sex, $email, $phoneNumber, $username, $password]);

        $_SESSION['success'] = "User registered successfully.";
        header("Location: ../View/Login.php");
        exit();
    } catch (PDOException $e) {
        $_SESSION['error'] = "Error registering user: " . $e->getMessage();
        header("Location: ../View/Register.php");
        exit();
    }
}
?>
