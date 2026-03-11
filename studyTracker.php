<?php
require_once('includes/dbConnect.php');
require_once('includes/studyTrackerLogic.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Study Tracker</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<?php
// グラフ用にデータを準備（逆順にして日付の古い順にする）
$labels = [];
$data = [];

// $todos（一覧データ）を逆順にして、日付と時間を配列に入れる
foreach (array_reverse($todos) as $todo) {
    // 日付を「03/11」のような形式にする
    $labels[] = date('m/d', strtotime($todo['created_at']));
    // 学習時間を入れる
    $data[] = $todo['study_time'];
}
?>

<body>

<div class="mainContainer">
    <h2 class="studyTitle">Study Tracker</h2>
    <p class="totalTimeDisplay">合計学習時間：<?php echo $total_time; ?>時間</p>

    <form method="post" class="inputForm">
        <input type="text" name="title" class="inputField"
               value="<?php echo $editTodo['title'] ?? ''; ?>" 
               placeholder="学習内容" required>

        <input type="number" name="study_time" class="inputField"
               value="<?php echo $editTodo['study_time'] ?? ''; ?>" 
               placeholder="時間（h）" required>
        
        <button type="submit" class="submitButton">
            <?php echo $editTodo ? '更新' : '追加'; ?>
        </button>

        <?php if ($editTodo): ?>
            <input type="hidden" name="id" value="<?php echo $editTodo['id']; ?>">
        <?php endif; ?>
    </form>

    <hr style="border: 0; border-top: 1px solid #eee; margin-bottom: 20px;">

    <div class="cardList">
        <?php foreach ($todos as $todo): ?>
            <div class="studyCard">
                <div class="cardInfo">
                    <span class="cardTitle"><?php echo htmlspecialchars($todo['title']); ?></span>
                    <div class="cardMeta">
                        <?php echo $todo['study_time']; ?>時間 ｜ <?php echo date('Y/m/d', strtotime($todo['created_at'])); ?>
                    </div>
                </div>
                <div class="actionLinks">
                    <a href="?edit=<?php echo $todo['id']; ?>" class="editLink">編集</a>
                    <a href="?delete=<?php echo $todo['id']; ?>" class="deleteLink" onclick="return confirm('本当に削除しますか？')">削除</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

    <div class="chartContainer">
        <canvas id="studyChartCanvas"></canvas>
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // HTMLのcanvas要素を取得
        const studyChartCanvas = document.getElementById('studyChartCanvas').getContext('2d');

        // グラフの作成
        const studyChart = new Chart(studyChartCanvas, {
            type: 'line', // 折れ線グラフ
            data: {
                // PHPで準備した配列をJSON形式でJSに渡す
                labels: <?php echo json_encode($labels); ?>, 
                datasets: [{
                    label: '学習時間 (h)',
                    data: <?php echo json_encode($data); ?>,
                    borderColor: '#0288d1', // 線の色
                    backgroundColor: 'rgba(2, 136, 209, 0.1)', // 線の下の塗りつぶし色
                    borderWidth: 3,
                    tension: 0.3, // 線のカーブ具合
                    fill: true
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true, // 0から開始
                        ticks: {
                            stepSize: 1 // 1時間刻み
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>