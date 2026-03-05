<?php
// データベース接続設定
$dsn        = 'mysql:dbname=portfolio_db;host=localhost;charset=utf8';
$user       = 'root';
$password   = ''; 

try {
    // PDOインスタンスの作成
    $pdo = new PDO($dsn, $user, $password);
    // エラーモードを例外に設定
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // 接続失敗時にエラーを表示して終了
    exit('データベース接続失敗：' . $e->getMessage());
}