<?php require 'includes/header.php'; ?>
    <title>C.C.Donutsx|login</title>

    <form action="login-output.php" method="post">
    
    <div id="login-product-list-nav">
        <nav class="login-breadcrumbNav" aria-label="パンくずリスト">
            <ul class="login-breadcrumbList">
                <li class="login-breadcrumbItem"><a href="index.php">top</a></li>
                <li class="login-breadcrumbItem"><a href="login-input.php">ログイン</a></li>
            </ul>
        </nav>
        <!-- ユーザー名 -->
        <div class="login-UserName">
            <p>ようこそ ゲスト様</p>
        </div>
    </div><!--nav-->
    <section class="login-site">
        <div class="login-item">
            <div class="login-title">ログイン</div>
        </div>
        <div class="login-sign">
            <div class="address">
                <p>メールアドレス</p>
                <input type="text" name="login" placeholder="(例)123@gmail.com" required>
            </div>
            <div class="pass">
                <p>パスワード</p>
                <input type="password" name="password" placeholder="パスワードを入力してください" required>
            </div> 
            <input type="submit" value="ログイン">
            <div class="login-Registration">会員登録はこちら</div>
        </div>
        
    </section>
</from>
<?php require 'includes/footer.php'; ?>
