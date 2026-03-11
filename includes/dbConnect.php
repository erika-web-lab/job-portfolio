<?php
// データベース接続設定。サーバー名を取得して接続先を自動で切り替える
if ($_SERVER['SERVER_NAME'] == 'localhost') {
    // 【ローカル環境：XAMPP用】
    $dsn      = 'サンプル;
    $user     = 'サンプル';
    $password = 'サンプル'; 
} else {
    // 【本番環境：XREA用】
    $dsn      = 'サンプル';
    $user     = 'サンプル';
    $password = 'サンプル';
}

try {
    // PDOインスタンスの作成
    $pdo = new PDO($dsn, $user, $password);
    // エラーモードを例外に設定
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // 接続失敗時にエラーを表示して終了
    exit('データベース接続失敗：' . $e->getMessage());

}
