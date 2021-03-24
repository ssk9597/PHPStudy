<?php
//DB
$dsn = "mysql:dbname=php_task3_board;host=localhost";
$user = "root";
$password = "root";

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    exit("接続失敗： " . $e->getMessage());
};
