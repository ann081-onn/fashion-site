<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "fashion_db";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("接続失敗");
}

$user_name = $_POST['user_name'];
$email = $_POST['email'];

$hash_password = password_hash(
    $_POST['password'],
    PASSWORD_DEFAULT
);

/* メールアドレス重複チェック */
$check_sql = "SELECT id FROM users WHERE email = ?";
$check_stmt = $conn->prepare($check_sql);
$check_stmt->bind_param("s", $email);
$check_stmt->execute();
$result = $check_stmt->get_result();

if ($result->num_rows > 0) {

    $check_stmt->close();
    $conn->close();

    header("Location: login.php?email_error=1");
    exit;
}

$check_stmt->close();

/* 新規登録 */
$sql = "INSERT INTO users
(name, email, password)
VALUES
(?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
    "sss",
    $user_name,
    $email,
    $hash_password
);

$stmt->execute();

$stmt->close();
$conn->close();

/* 登録完了ページへ */
header("Location: complete.php");
exit;

?>