<?php
// エラー表示設定（開発中のみ）
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('includes/dbConnect.php');  // まずDBに繋ぐ
require_once('includes/bbsLogic.php');   // 次に掲示板の計算をする
require_once('includes/contactLogic.php');
require_once('includes/studyTrackerLogic.php');
?>
 
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="styles/reset.css">       
        <link rel="stylesheet" href="styles/style.css">
        <title>ErikaSugioka'sPortfolio</title>
    </head>

    
        
    <body id="pageTop">
        <!-- トップへ戻るボタン -->
        <a href="#pageTop" class="toTopLink">
            <div class="toTopIcon">
                <img src="images/iruka.png" alt="イルカのトップへ戻るアイコン">
                <span class="toTopText">TOPに戻る</span>
            </div>
        </a>

        <!-- ローディング機能 -->
        <div class="loading">
            <img src="images/kaigara.png" class="loadingLogo" alt="ローディング">
            <p>Loading...</p>
        </div>
        
        <!-- ハンバーガー -->
        <div id="openNav" class="hamburger">☰</div>

        <!-- ドロワー -->
        <nav id="drawer">
            <div id="closeNav" class="close">×</div>
            <ul class="drawerLi">
                <li class="itemA">Menu</li>
                <li><a href="#pageTop">Top</a></li>
                <li><a href="#works">Works</a></li>
                <li><a href="#bbs">Guestbook</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#profile">Profile</a></li>
            </ul>
        </nav>    

        <header>
            <h1>ErikaSugioka's<br>Portfolio</h1>
        </header>
        <main>
            

            <section class="worksBox">
                
            <h2 id="works" class='sectionTitle'>Works</h2>
                    
                
                <p class='worksLead'>制作物はこちら</p>

                <div class="worksContainer">
                    <div class="seisakubutu worksItem">
                        <div class="imgBox renovationBox">
                            <a href="renovationwebsite/index.html" target="_blank" rel="noopener noreferrer">
                                <img src="images/renovation.png" alt="リフォームサイト" class="worksImage">
                            </a>
                        </div>
                        <p><a href="renovationwebsite/index.html" class="worksLink1" target="_blank" rel="noopener noreferrer">リフォームサイト</a></p>
                        <ul class="worksDetail">
                            <li>制作時間：48時間</li>
                            <li>使用技術：HTML、CSS</li>
                        </ul>
                        <p class="githubText">ソースコードはGitHubにて公開しています</p>
                        <p class="githubLink"><a href="https://github.com/erika-web-lab/job-portfolio/tree/main/renovationwebsite" class="worksGithub1" target="_blank" rel="noopener noreferrer">⇒ソースコードはこちら</a></p>
                    </div>

                    <div class="seisakubutu2 worksItem">
                        <div class="imgBox taiwanBox">
                            <a href="taiwan/index.html" target="_blank" rel="noopener noreferrer">
                                <img src="images/taiwan.png" alt="台湾観光サイト" class="worksImage">
                            </a>
                        </div>
                        <p><a href="taiwan/index.html" class="worksLink2" target="_blank" rel="noopener noreferrer">台湾観光サイト</a></p>
                        <ul class="worksDetail">
                            <li>制作時間：54時間×4人</li>
                            <li>使用技術：HTML、CSS、JavaScript</li>
                        </ul>
                        <p class="githubText">ソースコードはGitHubにて公開しています</p>
                        <p class="githubLink2"><a href="https://github.com/erika-web-lab/job-portfolio/tree/main/taiwan" class="worksGithub2" target="_blank" rel="noopener noreferrer">⇒ソースコードはこちら</a></p>
                    </div>

                    <div class="seisakubutu3 worksItem">
                        <div class="imgBox donutBox">
                            <a href="ccdonuts/index.php" target="_blank" rel="noopener noreferrer">
                                <img src="images/donut.png" alt="ドーナッツサイト" class="worksImage">
                            </a>
                        </div>
                        <p><a href="ccdonuts/index.php" class="worksLink3" target="_blank" rel="noopener noreferrer">ドーナッツサイト</a></p>
                        <ul class="worksDetail">
                            <li>制作時間：時間</li>
                            <li>使用技術：HTML、CSS、PHP</li>
                        </ul>
                        <p class="githubText">ソースコードはGitHubにて公開しています</p>
                        <p class="githubLink3"><a href="https://github.com/erika-web-lab/job-portfolio/tree/main/ccdonuts" class="worksGithub3" target="_blank" rel="noopener noreferrer">⇒ソースコードはこちら</a></p>
                    </div>
                </div>
                <div class="worksContainer2">
                    <div class="seisakubutu4 worksItem2">
                        <div class="imgBox studyBox">
                            <a href="donut/index.html" target="_blank" rel="noopener noreferrer">
                                <img src="images/study.jpg" alt="スタディトラッカー" class="worksImage">
                            </a>
                        </div>
                        <p><a href="studyTracker.php" class="worksLink3" target="_blank" rel="noopener noreferrer">スタディトラッカー</a></p>
                    
                    <ul class="worksDetail">
                            <li>制作時間：時間</li>
                            <li>使用技術：HTML、CSS、PHP</li>
                    </ul>
                        <p class="githubText">ソースコードはGitHubにて公開しています</p>
                        <p class="githubLink3"><a href="https://github.com/erika-web-lab/job-portfolio/blob/main/studyTracker.php" class="worksGithub3" target="_blank" rel="noopener noreferrer">⇒ソースコードはこちら</a></p>

                    </div>
                </div>
                <p class="worksDisclaimer">※制作物は、すべて架空のサイトです。</p>
            </section>

            <section class="bbsBox" id="bbs">
                <h2 class='sectionTitle'>Guestbook</h2>
                <p class='bbsBoxLead'>ぜひ一言メッセージをお願いします！⭐</p>
                
                <form action="#bbs" method="post" class="bbsForm">
                    <div class="formItem">
                        <label for="bbsName">お名前</label>
                        <input type="text" id="bbsName" name="bbsName" required>
                    </div>
                    <div class="formItem">
                        <label for="bbsMessage">メッセージ</label>
                        <textarea id="bbsMessage" name="bbsMessage" rows="3" required></textarea>
                    </div>
                    <button type="submit" name="bbsSubmit" class="submitBtn">
                        メッセージを送る ✉︎ <span class="arrow">➤</span>
                    </button>
                </form>

                <div class="bbsDisplay">
                    <?php if (!empty($posts)): ?>
                        <?php foreach ($posts as $post): ?>
                            <?php $randomIcon = $oceanIcons[array_rand($oceanIcons)]; ?>
                            <div class="postIt">

                                <div class="postName">
                                    <span><?php echo $randomIcon; ?> <?php echo htmlspecialchars($post['name'], ENT_QUOTES, 'UTF-8'); ?></span>
                                    <span class="postDate">
                                        <?php echo $post['created_at']; ?>
                                        <a href="#" 
                                        onclick="confirmDelete(<?php echo $post['id']; ?>); return false;" 
                                        class="deleteBtn">[削除]</a>
                                    </span>
                                </div>


                                <p class="postMessage">
                                    <?php echo nl2br(htmlspecialchars($post['message'], ENT_QUOTES, 'UTF-8')); ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>まだ投稿はありません。最初のメッセージをどうぞ！</p>
                    <?php endif; ?>
                </div>
            </section>

            
            <section class="contactBox" id="contact">
                <h2 class='sectionTitle'>Contact</h2>

                <p class="contactLead">ご質問等ございましたら、下記フォームよりご連絡ください。</p>
                
                <?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
                    <div id="successMsg" class='fadeOutMsg'>
                        🐋 メッセージを送信し、データベースに保存しました！
                    </div>
                <?php endif; ?>

                <form action="index.php#contact" method="post" class="contactForm">
                    <div class="formItem">
                        <label for="userName">お名前</label>
                        <input type="text" id="userName" name="userName" required>
                    </div>

                    <div class="formItem">
                        <label for="userEmail">メールアドレス</label>
                        <input type="email" id="userEmail" name="userEmail" required>
                    </div>

                    <div class="formItem">
                        <label for="userMessage">お問い合わせ内容</label>
                        <textarea id="userMessage" name="userMessage" rows="5" required></textarea>
                    </div>

                    <button type="submit" name="contactSubmit" class="submitBtn">
                        送信✉︎ <span class="arrow">➤</span> 
                    </button>
                </form>
                
                <p class="contactDisclaimer">※送信された内容はデータベースに記録されます。</p>
                <p class="contactNotice">なお、実際にお問い合わせがございましたら、下記宛先までメールをお送りください。</p>
                <dl class="contactInfo">
                    <dt>名前</dt><dd>杉岡絵里香</dd>
                    <dt>メールアドレス</dt><dd><a href="mailto:example@gmail.com">example@gmail.com</a></dd>
                </dl>
            </section>

            <section class="profileBox">
                <h2 id="profile" class='sectionTitle'>Profile</h2>
                <p class="sectionP1">杉岡絵里香</p>
                <p class="sectionP2">東京都在住</p>
                <p class="sectionP3">証券会社に約3年間勤務後、結婚を機に退職。<br>
                    その後は派遣社員として証券会社に勤務。<br>
                    2022年より派遣社員として証券システムの会社に勤務。<br>
                    2025年9月～2026年3月まで職業訓練校のWEBエンジニア育成科に通所。<br>
                    HTml、css、javascriptを学びました。</p>
            </section>

            

        </main>

        <footer class="footer">
            <p class="footerName">© 2025 Erika Sugioka</p>
            <p class="footerText">Portfolio Website</p>
        </footer>
            </div>

        
    <script src="scripts/script.js"></script>

    </body>



</html>