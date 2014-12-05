<div class="col hr">
  <h1><?php echo $products[$id]['name'] ?></h1>
  <dl>
    <dt>Price</dt>
    <dd><?php echo $products[$id]['price'] ?></dd>
    <dt>Category</dt>
    <dd><?php echo $products[$id]['category'] ?></dd>
  </dl>
  <p><a href="#" class="productAdd button" data-name="<?php echo $products[$id]['name'] ?>" data-id="<?php echo $id ?>" data-price="<?php echo $products[$id]['price'] ?>" data-category="<?php echo $products[$id]['category'] ?>">Add to shopping cart</a></p>
</div>