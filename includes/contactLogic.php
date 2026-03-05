<?php

// フォームが送信された（POSTされた）時の処理
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['contactSubmit'])) {
    
    // 1. フォームの入力内容を変数に代入（キャメルケース）
    $userName    = $_POST['userName'];
    $userEmail   = $_POST['userEmail'];
    $userMessage = $_POST['userMessage'];

    try {
        // 2. SQLを準備（プリペアドステートメントで安全に！）
        $sql = "INSERT INTO contacts (userName, userEmail, userMessage) 
                VALUES (:userName, :userEmail, :userMessage)";
        $stmt = $pdo->prepare($sql);

        // 3. 値をバインド（紐付け）
        $stmt->bindValue(':userName', $userName, PDO::PARAM_STR);
        $stmt->bindValue(':userEmail', $userEmail, PDO::PARAM_STR);
        $stmt->bindValue(':userMessage', $userMessage, PDO::PARAM_STR);
        
        // 4. 実行
        if ($stmt->execute()) {
            // 成功したら、URLに成功フラグを付けてリダイレクト（二重送信防止）
            header("Location: " . $_SERVER['PHP_SELF'] . "?status=success#contact");
            exit;
        }
    } catch (PDOException $e) {
        // 万が一失敗した場合はエラーを表示
        exit('お問い合わせ保存失敗：' . $e->getMessage());
    }
}