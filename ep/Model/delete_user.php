<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Delete User</h2>
        <div class="alert alert-danger" role="alert">
        <?php
        session_start();
        require_once('config.php');

        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
            // Lấy ID của người dùng từ yêu cầu GET
            $userId = $_GET["id"];

            // Xóa người dùng từ cơ sở dữ liệu
            $sql = "DELETE FROM cali_user WHERE id=:id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $userId, PDO::PARAM_INT);
            if ($stmt->execute()) {
                // Nếu xóa thành công, chuyển hướng người dùng trở lại trang ../View/Admin_user.php
                $_SESSION['success'] = "User deleted successfully.";
                echo "<script>alert('User deleted successfully.'); window.location = '../View/Admin_user.php';</script>";
                exit();
            } else {
                echo "Error deleting user: ";
            }
        } else {
            echo "Invalid request.";
        }
        ?>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Are you sure you want to delete this user?</h5>
                <a href="../View/Admin_user.php" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </div>
</body>
</html>
