'use strict';

// ==========================================
// 1. ドロワーメニュー機能
// ==========================================
const openNav = document.getElementById('openNav');
const drawer = document.getElementById('drawer');
const closeNav = document.getElementById('closeNav');
const drawerLinks = drawer.querySelectorAll('a'); 

openNav.addEventListener('click', () => {
    drawer.classList.add('show');
});

closeNav.addEventListener('click', () => {
    drawer.classList.remove('show');
});

// メニューリンクを押したら閉じる
drawerLinks.forEach(link => {
    link.addEventListener('click', () => {
        drawer.classList.remove('show');
    });
});

// ==========================================
// 2. ページ読み込み完了時に実行する処理
// ==========================================
window.addEventListener("load", function() {
    
    // --- ローディング画面を消す ---
    const loading = document.querySelector(".loading");
    if (loading) {
        loading.classList.add("hide");
        setTimeout(() => {
            loading.style.display = "none";
        }, 2000);
    }

    // --- 送信完了メッセージ(successMsg)を自動で消す ---
    const msg = document.getElementById('successMsg');
    if (msg) {
        // 4秒待ってからフェードアウト開始
        setTimeout(function() {
            msg.style.opacity = '0'; // style.cssの transition: 1s が効く
            
            // 完全に消えた1秒後に要素を削除
            setTimeout(function() {
                msg.remove();
            }, 1000);
        }, 4000);
    }

    // --- 【重要】リロード時の二重メッセージ防止 ---
    // 表示された瞬間にURLから「?status=success」をこっそり消す（プロの技）
    if (window.history.replaceState) {
        const url = new URL(window.location.href);
        url.searchParams.delete('status'); // statusだけを消す
        window.history.replaceState(null, null, url.pathname + url.search + url.hash);
    }
});

// ==========================================
// 3. 掲示板 削除確認関数（loadの外でOK）
// ==========================================
/**
 * 掲示板の投稿削除を確認する関数
 * @param {number} postId - 削除する投稿のID
 */
function confirmDelete(postId) {
    const adminPassword = 'sugi123'; 
    const inputPass = prompt('管理者パスワードを入力してください');

    if (inputPass === adminPassword) {
        location.href = `?deleteId=${postId}&adminPass=${inputPass}`;
    } else if (inputPass !== null) {
        alert('パスワードが違います');
    }
}