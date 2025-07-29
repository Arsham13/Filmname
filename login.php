<?php

session_start();

if (isset($_SESSION["user"])) {
    header("location: index.php");
}


use Dom\ChildNode;

require './Message.php';
require './User.php';
$user_i = new User;

$pdo = require_once './Connection.php';

$username = trim($_POST['username']);
$password = $_POST['password'];

if (strlen($username) < 3 || strlen($username) > 30) {
    Message::showMessage("نام کاربری باید بین 3 تا 30 کاراکتر باشد.", "error");
}

if (strlen($password) < 6 || strlen($password) > 20) {
    Message::showMessage("رمز عبور باید بین 6 تا 20 کاراکتر باشد.", "error");
}

$hash_pass = md5($password);


$sql = "SELECT username, password FROM users";
$stmt2 = $pdo->query($sql);
$users = $stmt2->fetchAll(PDO::FETCH_ASSOC);
// var_dump($users);
$u = 0;
$p = 0;

foreach ($users as $key => $user) {
    if ($user["username"] !== $username) {
        $u += 1;
    }

    if ($user["password"] !== $hash_pass) {
        $p += 1;
    }
};
if ($u == count($users)) {
    Message::showMessage("کاربری با این نام کاربری وجود ندارد.", "error");
} else {
    $sql = "SELECT password FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":username", $username);
    $stmt->execute();
    $use_r = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($use_r["password"] != $hash_pass) {
        Message::showMessage("رمز عبور نادرست است.", "error");
    }
}


$sql = "SELECT * FROM users WHERE username = :username";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":username", $username);
$stmt->execute();
$user_i = $stmt->fetchObject('User');
var_dump($user_i);
$_SESSION["user"] = $user_i->toArray();
header("location: index.php");

?>