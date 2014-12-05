<div class="col hr">
  <h2>Promotions</h2>
  <?php foreach ($promotions as $id => $promotion): ?>
    <a class="promotion" href="?page=product&amp;id=<?php echo $promotion['productId'] ?>" data-id="<?php echo $id ?>">
      <h2><?php echo $promotion['name'] ?></h2>
      <img src="<?php echo $promotion['image'] ?>" alt="">
    </a>
  <?php endforeach; ?>
</div>