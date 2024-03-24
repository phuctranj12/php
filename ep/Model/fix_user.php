<?php
    session_start();
    require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Edit user</h2>
        <?php
            if (isset($_GET['id']) && !empty($_GET['id'])) {
                $id = $_GET['id'];
                $sql = "SELECT * FROM cali_user WHERE id=?";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(1, $id, PDO::PARAM_INT);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($row) {
        ?>
        <form action="fix_user_process.php" method="post">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($row['name']); ?>">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" value="<?php echo htmlspecialchars($row['address']); ?>">
            </div>
            <div class="form-group">
                <label for="birthday">Birthday:</label>
                <input type="date" class="form-control" id="birthday" name="birthday" value="<?php echo htmlspecialchars($row['birthday']); ?>">
            </div>
            <div class="form-group">
                <label for="sex">Sex:</label>
                <select class="form-control" name="sex" id="sex">
                    <option value="Male" <?php if ($row['sex'] == 'Male') echo 'selected'; ?>>Nam</option>
                    <option value="Female" <?php if ($row['sex'] == 'Female') echo 'selected'; ?>>Nữ</option>
                    <option value="Other" <?php if ($row['sex'] == 'Other') echo 'selected'; ?>>Khác</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>">
            </div>
            <div class="form-group">
                <label for="phoneNumber">Phone Number:</label>
                <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" value="<?php echo htmlspecialchars($row['phoneNumber']); ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="save">Save</button>
        </form>
        <?php
                } else {
                    echo "User not found.";
                }
            } else {
                echo "Invalid request.";
            }
        ?>
    </div>
</body>
</html>
