<div class="col">
  <h1>Thank you for shopping!</h1>
  <p>Your order:</p>
  <ul>
<?php foreach ($_SESSION['cart'] as $id): ?>
    <li data-id="<?php echo $id ?>"><?php echo $products[$id]['name'] ?></li>    
<?php endforeach; ?>
  </ul>
</div>
<?php
unset($_SESSION['cart']);
?>