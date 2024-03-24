
<?php
define('HOSTING', 'localhost');
define('USERNAME', 'root');
define('PASS', '');
define('DATABASE', 'FitnessClub');

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

try {
    $pdo = new PDO("mysql:host=" . HOSTING . ";dbname=" . DATABASE, USERNAME, PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo "Lỗi kết nối đến cơ sở dữ liệu: " . $e->getMessage();
    die();
}
function query($sql){
    global $pdo;
    try {
        $pdo->exec($sql);
    } catch(PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
        return false;
    }
    return true;
}
function select($sql){
    global $pdo;
    try {
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll();
    } catch(PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
        return [];
    }
}
function getPost($k){
    return $_POST[$k];
}
function Get($k){
    return $_GET[$k];
}
function hashPassword($password) {
    return password_hash($password, PASSWORD_BCRYPT);
}
?>

















<!-- 
define('HOSTING','localhost');
define('USERNAME','root');
define('PASS','');
define('DATABASE','FitnessClub');

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
function query($sql){
    $con = mysqli_connect(HOSTING,USERNAME,PASS,DATABASE);
    mysqli_set_charset($con,'utf8');
    mysqli_query($con,$sql);
    mysqli_close($con);
}

function select($sql){
    $con = mysqli_connect(HOSTING,USERNAME,PASS,DATABASE);
    mysqli_set_charset($con,'utf8');
    $tam = mysqli_query($con,$sql);
    $productlist =[];
    while(($row =mysqli_fetch_array($tam,1)) !== null){
        $productlist[] = $row;
    }
    mysqli_close($con);
    return $productlist;
}
function getPost($k){
    return $_POST[$k];
}
function Get($k){
    return $_GET[$k];
} -->



