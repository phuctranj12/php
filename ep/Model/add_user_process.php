<?php
require_once('config.php');

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $address = $_POST["address"];
    $birthday = $_POST["birthday"];
    $sex = $_POST["sex"]; 
    $phoneNumber = $_POST["phoneNumber"];
    $email = $_POST["email"]; // Thêm dòng này để lấy giá trị của trường email từ form
    $password = $_POST["password"];

    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Sử dụng PDO thay vì MySQLi
    $sql = "INSERT INTO cali_user (name, address, birthday, sex, email, phoneNumber, username, password) 
            VALUES (:name, :address, :birthday, :sex, :email, :phoneNumber, :username, :password)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':birthday', $birthday);
    $stmt->bindParam(':sex', $sex);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phoneNumber', $phoneNumber);
    $stmt->bindParam(':username', $name);
    $stmt->bindParam(':password', $hashed_password);

    if ($stmt->execute()) {
        header("Location: ../View/Admin_user.php?msg=success");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $stmt->errorInfo()[2];
    }
}
?>
