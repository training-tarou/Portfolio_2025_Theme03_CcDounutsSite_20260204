<?php require 'includes/header.php'; ?>
  <title>C.C.Donuts|product_detail商品詳細</title>';
    <div id="d-product-list-nav">
        <nav class="d-breadcrumbNav" aria-label="パンくずリスト">
            <ul class="d-breadcrumbList">
                <li class="d-breadcrumbItem"><a href="index.php">top</a></li>
                <li class="d-breadcrumbItem"><a href="itemlist.php">商品一覧</a></li>
                <li class="d-breadcrumbItem"><a href="product_detail.php?id=1">CCドーナツ 当店オリジナル（5個入り）</a></li>
            </ul>
        </nav>
        <!-- ユーザー名 -->
        <div class="details-UserName">
            <P>ようこそ ゲスト様</P>
        </div>
    </div><!--nav-->
    <section class="detail-section">

        <div class="product-details">

            <!-- 商品画像 -->
            <div class="product-detail-image"></div>

            <!-- 商品情報 -->
            <div class="detail-product-info">
                <h4 class="d-product-name">CCドーナツ 当店オリジナル（5個入り）</h4>
                <p class="d-product-description">
                    当店自慢のオリジナルドーナツを5個セットにしました。
                </p>
                <p class="d-product-price">税込 ￥1,500</p>

                <!-- 数量 & カート -->
                <div class="product-quantity">
                    <input type="number" id="quantity" class="quantity-box" value="1" min="1">
                    <label class="quantity-label" for="quantity">個</label>
                    <button class="d-add-cart">カートに入れる</button>
                
                    <!-- お気に入り -->
                    <button class="favorite-btn" aria-label="お気に入り">
                    ♡
                    </button>
                </div>
            </div>
        </div>
    </section>
<?php require 'includes/footer.php'; ?>