<?php

session_start();

require "./Message.php";

if (!isset($_SESSION["user"])) {
    header("location: index.php");
}

try {
    $pdo = require_once './Connection.php';

    $username = $_SESSION["user"]["username"];

    $sql = "DELETE FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":username", $username, PDO::PARAM_STR_CHAR);
    $stmt->execute();

    unset($_SESSION["user"]);

    header("location: index.php");
} catch (PDOException $e) {
    Message::showMessage($e->getMessage(), "error");
}