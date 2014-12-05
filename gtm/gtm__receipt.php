<?php
foreach ($_SESSION['cart'] as $id) {
  $revenue += $products[$id]['price'];
}
?>
<script>
dataLayer = [{
  'ecommerce': {
    'purchase': {
      'actionField': {
        'id': '<?php echo rand() ?>',
        'affiliation': '<?php echo $config['storeName'] ?>',
        'revenue': '<?php echo $revenue ?>',
        'tax': '0',
        'shipping': '0',
        'coupon': '<?php echo $_GET['coupon'] ?>'
      },
      'products': [
   <?php foreach ($_SESSION['cart'] as $id): ?>
        {
          'name': '<?php echo $products[$id]['name'] ?>',
          'id': '<?php echo $id ?>',
          'price': '<?php echo $products[$id]['price'] ?>',
          'brand': '<?php echo $products[$id]['brand'] ?>',
          'category': '<?php echo $products[$id]['category'] ?>',
          'coupon': '<?php echo $_GET['coupon'] ?>',
          'variant': '<?php echo $products[$id]['variant'] ?>',
          'quantity': 1
        },
   <?php endforeach; ?>

      ]
    }
  }
}];
</script>