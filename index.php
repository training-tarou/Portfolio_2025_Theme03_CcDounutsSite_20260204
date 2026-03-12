<?php require 'includes/header.php'; ?>
<title>C.C.Donuts</title>
    
<?php session_start(); ?>
    <main class="site-main">
        <!-- ユーザー名 -->
        <div class="top-UserName">
            <p>
                ようこそ
                <?php
                if (isset($_SESSION['customer'])) {
                    echo $_SESSION['customer']['name'] . ' 様';
                } else {
                    echo 'ゲスト様';
                }
                ?>
            </p>
        </div>
        <!-- ヒーロー画像 -->
         <div class="top-hero-image"></div>
         <!-- お知らせコンテンツ -->
         <div class="top-NotificationContent">
             <div class="top-item">
                 <div class="top-NewItem">
                    <p class="top-NewItemTag">新商品</p>
                     <p>サマーシトラス</p>
                 </div>
                 <div class="top-ALifeWithDonuts">
                     <p>ドーナツのある生活</p>
                 </div>
             </div>
             <div class="top-ItemList">
                 <p>商品一覧</p>
             </div>
         </div>
        <!-- お店の紹介コンテンツ -->
          <div class="top-IntroductionStore">
             <p class="philosophy-en">Philosophy</p>
             <p class="philosophy-ja">私たちの信念</p>
             <p class="concept-en">"Creating Connections"</p>
             <p class="concept-ja">「ドーナツでつながる」</p>
         </div>';
        <!-- 人気ランキングコンテンツ -->
         <section class="ranking">
             <h2>人気ランキング</h2>
                <!-- 人気ランキング1位 -->
             <ul class="ranking-list">
                 <li class="ranking-item">
                     <span class="rank">1位</span>

                     <a href="#" class="product">
                     <div class="product-image product-cc"></div>

                     <p class="product-name">CCドーナツ 当店オリジナル（5個入り）</p>
                     <p class="product-price">税込 ￥1,500</p>
                     <button class="add-cart">カートに入れる</button>
                 </a>
                 </li>
                <!-- 人気ランキング2位 -->
                 <li class="ranking-item">
                     <span class="rank">2位</span>

                     <a href="#" class="product">
                     <div class="product-image product-cc"></div>

                     <p class="product-name">フルーツドーナツセット（12個入り）</p>
                     <p class="product-price">税込 ￥3,500</p>
                     <button class="add-cart">カートに入れる</button>
                     </a>
                 </li>
                <!-- 人気ランキング3位 -->
                 <li class="ranking-item">
                     <span class="rank">3位</span>

                     <a href="#" class="product">
                     <div class="product-image product-cc"></div>

                     <p class="product-name">フルーツドーナツセット（14個入り）</p>
                     <p class="product-price">税込 ￥4,000</p>
                     <button class="add-cart">カートに入れる</button>
                     </a>
                 </li>
               <!-- 人気ランキング4位 -->
                 <li class="ranking-item">
                     <span class="rank">4位</span>
                     <a href="#" class="product">
                     <div class="product-image product-cc"></div>

                     <p class="product-name">チョコレートデライト（5個入り）</p>
                     <p class="product-price">税込 ￥1,600</p>
                     <button class="add-cart">カートに入れる</button>
                     </a>
                 </li>
                <!-- 人気ランキング5位 -->
                 <li class="ranking-item">
                     <span class="rank">5位</span>

                     <a href="#" class="product">
                     <div class="product-image product-cc"></div>

                     <p class="product-name">ベストセレクションボックス（4個入り）</p>
                     <p class="product-price">税込 ￥1,200</p>
                     <button class="add-cart">カートに入れる</button>
                 </a>
                 </li>
                <!-- 人気ランキング6位 -->
                 <li class="ranking-item">
                     <span class="rank">6位</span>

                     <a href="#" class="product">
                     <div class="product-image product-cc"></div>

                     <p class="product-name">ストロベリークラッシュ（5個入り）</p>  
                     <p class="product-price">税込 ￥1,800</p>
                     <button class="add-cart">カートに入れる</button>
                     </a>
                 </li>
             </ul>
         </section>
        </main>
<?php require 'includes/footer.php'; ?>
