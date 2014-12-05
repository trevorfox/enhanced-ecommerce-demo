<div class="col hr">
  <h1>Shopping cart</h1>
<?php if (count($_SESSION['cart'])): ?>
  <ul class="cart">
<?php foreach ($_SESSION['cart'] as $cartId => $id): ?>
    <li class="cart__item" data-id="<?php echo $id ?>" data-cartid="<?php echo $cartId ?>"><?php echo $products[$id]['name'] ?> (remove)</li>    
<?php endforeach; ?>
  </ul>
  <p><a href="?page=pay" class="button">Proceed to payment (<span class="cart__count"><?php echo count($_SESSION['cart']) ?></span>)</a></p>
<?php else: ?>
  <p>Your shopping cart is empty</p>
<?php endif; ?>
</div>