<?php
session_start();
require_once('./functions.php');
require_once('config.php');

// Kiểm tra và thêm tài khoản admin nếu không tồn tại
function createAdminIfNeeded($pdo) {
    $sql_check_admin = "SELECT * FROM cali_user WHERE username='admin'";
    $stmt = $pdo->prepare($sql_check_admin);
    $stmt->execute();
    $result_check_admin = $stmt->fetch();

    if (!$result_check_admin) {
        $hashed_password = hashPassword('123456'); // Mk admin

        $sql_insert_admin = "INSERT INTO cali_user (name, address, birthday, sex, email, phoneNumber, username, password, role) 
                            VALUES ('Admin', 'Admin Address', '2000-01-01', 'Male', 'admin@example.com', '123456789', 'admin', ?, 1)";

        $stmt_insert_admin = $pdo->prepare($sql_insert_admin);
        $stmt_insert_admin->bindParam(1, $hashed_password);
        
        if ($stmt_insert_admin->execute()) {
            echo "Admin account created successfully";
        } else {
            echo "Error creating admin account";
        }
    }
}

createAdminIfNeeded($pdo);

// Xử lý đăng nhập
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = getPost("username");
    $password = getPost("password");

    // Kiểm tra thông tin đăng nhập trong cơ sở dữ liệu
    $sql = "SELECT * FROM cali_user WHERE username=?";
    $stmt_select_user = $pdo->prepare($sql);
    $stmt_select_user->bindParam(1, $username);
    $stmt_select_user->execute();
    $result = $stmt_select_user->fetch();

    if ($result) {
        if (password_verify($password, $result['password'])) {
            // Đăng nhập thành công
            $_SESSION["username"] = $username;
            $_SESSION["role"] = $result['role'];
            if ($result['role'] == 0) {
                // Người dùng bình thường
                header("Location: ../View/welcome.php");
                setcookie("user_id",$result['id'], time() + 3600, "/ep");
                setcookie("ten",$username, time() + 3600, "/ep");
                exit();
            } elseif ($result['role'] == 1) {
                // Quản trị viên
                header("Location: ../View/Admin_user.php");
                setcookie("user", "admin", time() + 3600, "/ep");
                exit();
            }
        } else {
            // Sai mật khẩu
            $_SESSION['error'] = "Incorrect password. Please try again.";
        }
    } else {
        // Tài khoản không tồn tại
        $_SESSION['error'] = "Username not found. Please try again.";
    }
} else {
    // Phương thức yêu cầu không hợp lệ
    $_SESSION['error'] = "Invalid request.";
}

// Điều hướng người dùng đến trang đăng nhập
header("Location: ../View/Login.php");
exit();
?>
