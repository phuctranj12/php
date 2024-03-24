<?php
require_once('config.php');

// Hàm thêm tài khoản người dùng
function add_user($name, $address, $birthday, $sex, $email, $phoneNumber, $username, $password, $role) {
    global $pdo;

    // Mã hóa mật khẩu trước khi lưu vào cơ sở dữ liệu
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO cali_user (name, address, birthday, sex, email, phoneNumber, username, password, role) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $address);
    $stmt->bindParam(3, $birthday);
    $stmt->bindParam(4, $sex);
    $stmt->bindParam(5, $email);
    $stmt->bindParam(6, $phoneNumber);
    $stmt->bindParam(7, $username);
    $stmt->bindParam(8, $hashed_password);
    $stmt->bindParam(9, $role);

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

// Hàm sửa thông tin tài khoản người dùng
function edit_user($id, $name, $address, $birthday, $sex, $email, $phoneNumber, $username, $password, $role) {
    global $pdo;

    // Kiểm tra xem mật khẩu đã được nhập hay không
    if ($password != '') {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE cali_user 
                SET name=?, address=?, birthday=?, sex=?, email=?, phoneNumber=?, username=?, password=?, role=? 
                WHERE id=?";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $address);
        $stmt->bindParam(3, $birthday);
        $stmt->bindParam(4, $sex);
        $stmt->bindParam(5, $email);
        $stmt->bindParam(6, $phoneNumber);
        $stmt->bindParam(7, $username);
        $stmt->bindParam(8, $hashed_password);
        $stmt->bindParam(9, $role);
        $stmt->bindParam(10, $id);
    } else {
        $sql = "UPDATE cali_user 
                SET name=?, address=?, birthday=?, sex=?, email=?, phoneNumber=?, username=?, role=? 
                WHERE id=?";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $address);
        $stmt->bindParam(3, $birthday);
        $stmt->bindParam(4, $sex);
        $stmt->bindParam(5, $email);
        $stmt->bindParam(6, $phoneNumber);
        $stmt->bindParam(7, $username);
        $stmt->bindParam(8, $role);
        $stmt->bindParam(9, $id);
    }

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

// Hàm xoá tài khoản người dùng
function delete_user($id) {
    global $pdo;

    $sql = "DELETE FROM cali_user WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1, $id);

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

// Không cần thiết đóng kết nối cơ sở dữ liệu khi sử dụng PDO

?>
