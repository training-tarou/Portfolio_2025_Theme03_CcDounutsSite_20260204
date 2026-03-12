<?php require 'includes/header.php'; ?>
<!--下記のコードのPHPタグの部分は、すべて生成AIに作成したものです。-->


<!-- 中：購入一覧 -->
<div class="cart-List">

  <div class="product-image">
    <img src="<?= htmlspecialchars($item['image']) ?>" alt="">
  </div>

  <div class="cart-product-info">
    <h4 class="d-product-name">
      <?= htmlspecialchars($item['name']) ?>
    </h4>

    <p class="cart-product-price">
      税込 ￥<?= number_format($item['price']) ?>
    </p>

    <div class="cart-product-quantity">

      <!-- 1行目：数量 -->
      <div class="quantity-row">
        <label class="cart-amount-label">数量</label>
        <input
          type="number"
          class="cart-quantity-box"
          value="<?= $item['quantity'] ?>"
          min="1"
        >
        <label class="cart-quantity-label">個</label>
      </div>

      <!-- 2行目：再計算 -->
      <button class="recalculation-btn">再計算</button>

      <!-- 3行目：削除する -->
      <button class="delete-btn">削除する</button>

    </div>
  </div>

</div>

<?php require 'includes/footer.php'; ?>
