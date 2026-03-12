<?php require 'includes/header.php'; ?>
<?php
// 0.セッションを開始
session_start(); 

// 1. セッションを空にする（以前のログイン情報を消す）
unset($_SESSION['customer']);

// 2. データベース接続
$pdo = new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8', 'root', '');

// 3. 入力値を受け入れる(この内容は、生成AIより入手)
$login = $_POST['login'];
$password= $_POST['password'];

// 4. SQLの準備（メールアドレスとパスワードで検索）
$sql = $pdo->prepare('select * from customers where mail=? and password=?');

// 5. 実行（$_POSTはすべて大文字！）
$sql->execute([$_POST['login'], $_POST['password']]);

// 6. 結果をセッションに保存(この内容は、生成AIより入手)
foreach ($sql as $row) {
    $_SESSION['customer'] = [
        'id' => $row['id'], 
        'name' => $row['name'], 
    ];
}
?>
    <title>C.C.Donuts | ログイン完了</title>
<?php 
if (isset($_SESSION['customer'])) {
    // ▼ ログイン成功時：echoスタイル ▼ //
echo '<div id="login-Complete-product-list-nav">';

echo '    <nav class="login-Complete-breadcrumbNav" aria-label="パンくずリスト">';
echo '        <ul class="login-Complete-breadcrumbList">';
echo '            <li class="login-Complete-breadcrumbItem"><a href="top.php">top</a></li>';
echo '            <li class="login-Complete-breadcrumbItem"><a href="login-input.php">ログイン</a></li>';
echo '            <li class="login-Complete-breadcrumbItem">ログイン完了</li>';
echo '        </ul>';
echo '    </nav>';

    // ユーザー名 //
echo '    <div class="login-Complete-UserName">';
echo '        <label>ようこそ ' . $_SESSION['customer']['name'] . ' 様</label>';
echo '    </div>';
echo '</div>';

echo '<section class="login-Complete-site">';
echo '    <div class="login-Complete-item">';
echo '        <div class="login-Complete-title">ログイン完了</div>';
echo '    </div>';

echo '    <div class="login-Complete-sign">';
echo '        <p class="login-Complete">ログインが完了しました。</p>';
echo '        <p class="login-continued">引き続きお楽しみください</p>';

echo '        <div class="login-Purchase">';
echo '            <a href="purchase.php">購入確認ページにすすむ</a>';
echo '        </div>';
echo '        <div class="login-top">';
echo '            <a href="index.php">TOPページにもどる</a>';
echo '        </div>';
echo '    </div>';
echo '</section>';

} else {
// ▼ ログイン失敗時：echoスタイル ▼//

echo '<section class="login-Complete-site">';
echo '    <div class="login-Complete-item">';
echo '        <div class="login-Complete-title">ログイン失敗</div>';
echo '    </div>';

echo '    <div class="login-Complete-sign">';
echo '        <p class="login-Complete">';
echo '            メールアドレスまたはパスワードが違います。';
echo '        </p>';

echo '        <div class="login-top">';
echo '            <a href="login-input.php">ログイン画面にもどる</a>';
echo '        </div>';
echo '    </div>';
echo '</section>';
}
?>
<?php require 'includes/footer.php'; ?>
