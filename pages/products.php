<div class="col hr">
  <h1>Our products</h1>
  <ul class="products" data-listname="<?php echo $config['listName'] ?>">
  <?php foreach ($products as $id => $product): ?>
    <li class="products__item"><a href="?page=product&amp;id=<?php echo $id ?>" class="products__item__link" data-id="<?php echo $id ?>" data-position="<?php echo $id+1 ?>"><?php echo $product['name'] ?></a></li>
  <?php endforeach; ?>
  </ul>
</div>