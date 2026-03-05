<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>C.C.Donuts</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DotGothic16&family=Noto+Sans+JP:wght@100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="styles/reset.css">
<link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <header class="mainHeader">
        <div class="headerIcons">
            <nav class="gMenu">
                <input class="menuBtn" type="checkbox" id="menuBtn">
                <label class="menuIcon" for="menuBtn">
                <span class="navicon"></span>
                </label>
                <ul class="menu">
                <li><a href="index.html">TOP</a></li>
                <li><a href="products.php">商品一覧</a></li>
                <li><a href="menu.html">よくある質問</a></li>
                <li><a href="info.html">問い合わせ</a></li>
                <li><a href="info.html">当サイトのポリシー</a></li>
                </ul>
            </nav>

            <h1 class="logo">
                <picture>
                    <source srcset="images/spLogo.png" media="(max-width: 768px)">
                    <img src="images/logo.png" alt="C.C.Donuts">
                </picture>
            </h1>
            
            <div class='rightIcons'>
                
                <div class="login">
                    <picture><source srcset="images/spLogin.png" media="(max-width: 767px)">
                    <img src="images/login.png" alt="ログイン">
                    </picture>
                </div>


                <div class="cart">
                    <picture><source srcset="images/spCart.png" media="(max-width: 767px)">
                    <img src="images/cart.png" alt="カート">
                    </picture>
                </div>
            </div>
            
        </div>

        <div class="headerBottom">
            <form class="searchForm">
            <input type="text" name="search">
            <button type="submit"><i class="searchIcon"></i></button>
            </form>
        </div>
    </header>
    <div class="bar">
        ようこそ ゲスト様
    </div>