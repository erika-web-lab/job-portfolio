<?php


// 1. 海のアイコンリスト
$oceanIcons = ['🐋', '🐬', '🐚', '🦀', '🦈', '🐟','🏝️'];

// 2. 投稿削除の処理
if (isset($_GET['deleteId']) && isset($_GET['adminPass'])) {
    $adminPassword = '●●●●●●●'; // 管理者パスワード
    if ($_GET['adminPass'] === $adminPassword) {
        $deleteId = (int)$_GET['deleteId'];
        $stmt = $pdo->prepare("DELETE FROM posts WHERE id = :id");
        $stmt->bindValue(':id', $deleteId, PDO::PARAM_INT);
        $stmt->execute();
        
        header("Location: " . $_SERVER['PHP_SELF'] . "#bbs");
        exit;
    }
}

// 3. 投稿保存の処理
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['bbsSubmit'])) {
    $name = $_POST['bbsName'];
    $message = $_POST['bbsMessage'];

    $stmt = $pdo->prepare("INSERT INTO posts (name, message) VALUES (:name, :message)");
    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    $stmt->bindValue(':message', $message, PDO::PARAM_STR);
    $stmt->execute();

    header("Location: " . $_SERVER['PHP_SELF'] . "#bbs");
    exit;
}

// 4. 倉庫から全員分のデータを取ってくる
$stmt = $pdo->query("SELECT * FROM posts ORDER BY created_at DESC");

$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
