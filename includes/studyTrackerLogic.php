<?php
// 追加・更新処理
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'];
    $study_time = $_POST['study_time'];

    // 更新の場合
    if (!empty($_POST['id'])) {

        $id = $_POST['id'];

        $stmt = $pdo->prepare("UPDATE todos SET title = ?, study_time = ? WHERE id = ?");
        $stmt->execute([$title, $study_time, $id]);

    } else {
        // 新規追加
        $stmt = $pdo->prepare("INSERT INTO todos (title, study_time, created_at) VALUES (?, ?, NOW())");
        $stmt->execute([$title, $study_time]);
    }
}

// 削除処理
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $stmt = $pdo->prepare("DELETE FROM todos WHERE id = ?");
    $stmt->execute([$id]);
}
// 編集対象取得
$editTodo = null;

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $stmt = $pdo->prepare("SELECT * FROM todos WHERE id = ?");
    $stmt->execute([$id]);
    $editTodo = $stmt->fetch(PDO::FETCH_ASSOC);
}

// 一覧取得
$stmt = $pdo->query("SELECT * FROM todos ORDER BY created_at DESC");
$todos = $stmt->fetchAll(PDO::FETCH_ASSOC);

// 合計学習時間取得
$stmt = $pdo->query("SELECT SUM(study_time) AS total_time FROM todos");
$total = $stmt->fetch(PDO::FETCH_ASSOC);
$total_time = $total['total_time'] ?? 0;