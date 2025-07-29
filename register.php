<?php

session_start();

if (isset($_SESSION["user"])) {
    header("location: index.php");
}

require './Message.php';

$pdo = require_once './Connection.php';

$username = trim($_POST['username']);
$email = $_POST['email'];
$password = $_POST['password'];
$birth_date = $_POST['date'] ?? "0000-00-00";
$gender = $_POST['gender'] ?? null;
$agree = $_POST['agree_checkbox'] ?? null;


if (strlen($username) < 3 || strlen($username) > 30) {
    Message::showMessage("نام کاربری باید بین 3 تا 30 کاراکتر باشد.", "error");
}

if (strlen($password) < 6 || strlen($password) > 20) {
    Message::showMessage("رمز عبور باید بین 6 تا 20 کاراکتر باشد.", "error");
}

if (!$gender || !in_array($gender, ['male', 'female'])) {
    Message::showMessage("جنسیت نامعتبر است.", "error");
}

if (!$agree) {
    Message::showMessage("شما باید با قوانین سایت موافقت کنید.", "error");
}

$sql = "SELECT username FROM users";
$stmt2 = $pdo->query($sql);
$users = $stmt2->fetchAll(PDO::FETCH_ASSOC);
foreach ($users as $key => $user) {
    if ($username === $user["username"]) {
        Message::showMessage("این نام کاربری قبلا ثبت شده است. لطفا نام کاربری دیگری انتخاب کنید.", "error");
    }
}

$hash_pass = md5($password);

$sql = "INSERT INTO users (username, email, password, birth_date, gender) VALUES (:username, :email, :password, :birth_date, :gender)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ":username" => $username,
    ":email" => $email,
    ":password" => $hash_pass,
    ":birth_date" => $birth_date,
    ":gender" => $gender,
]);

header("location: login_page.php");