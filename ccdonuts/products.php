<?php
require 'includes/header.php';

// DB接続
$pdo = new PDO(
    'mysql:host=localhost;dbname=ccdonuts;charset=utf8',
    'root',
    ''
);

// メインメニュー取得
$sql = "SELECT * FROM products WHERE category = 'main'";
$stmt = $pdo->query($sql);
$mainProducts = $stmt->fetchAll(PDO::FETCH_ASSOC);

// バラエティセット取得
$sql = "SELECT * FROM products WHERE category = 'variety'";
$stmt = $pdo->query($sql);
$varietyProducts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2 class='title'>商品一覧</h2>

<!-- メインメニュー -->
<h2 class="sectionTitle">メインメニュー</h2>

<div class="mainMenuBox">
<?php foreach ($mainProducts as $product): ?>
    <div class="itemBox">
        <img src="images/<?= htmlspecialchars($product['image']) ?>" alt="">
        <p class="itemName"><?= htmlspecialchars($product['name']) ?></p>
        <p class="itemPrice">税込 ￥<?= number_format($product['price']) ?></p>

        <form action="cart_add.php" method="post">
            <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
            <button type="submit" class="addCart">カートに入れる</button>
        </form>
    </div>
<?php endforeach; ?>
</div>


<!-- バラエティセット -->
<h2 class="sectionTitle">バラエティセット</h2>

<div class="mainMenuBox">
<?php foreach ($varietyProducts as $product): ?>
    <div class="itemBox">
        <img src="images/<?= htmlspecialchars($product['image']) ?>" alt="">
        <p class="itemName"><?= htmlspecialchars($product['name']) ?></p>
        <p class="itemPrice">税込 ￥<?= number_format($product['price']) ?></p>

        <form action="cart_add.php" method="post">
            <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
            <button type="submit" class="addCart">カートに入れる</button>
        </form>
    </div>
<?php endforeach; ?>
</div>

<?php require 'includes/footer.php'; ?>