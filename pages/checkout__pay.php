<div class="col hr">
  <h1>Your order</h1>
  <ul>
<?php foreach ($_SESSION['cart'] as $id): ?>
    <li data-id="<?php echo $id ?>"><?php echo $products[$id]['name'] ?></li>    
<?php endforeach; ?>
  </ul>
  <form method="get" action="." class="pay" data-step="2">
    <input type="hidden" name="page" value="receipt">
    <label>Name
      <input type="text" name="name">
    </label>
    <fieldset>
      <legend>Payment method</legend>
      <label><input type="radio" name="method" value="Credit Card" checked="checked"> Credit Card</label>
      <label><input type="radio" name="method" value="Invoice"> Invoice</label>
    </fieldset>
    <label>Coupon code
      <input type="text" name="coupon">
    </label>
    <input type="submit" value="Pay" class="button">
  </form>
</div>