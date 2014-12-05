<script>
dataLayer = [{
  'ecommerce': {
    'checkout': {
      'actionField': {
        'step': 1
      },
      'products': [
   <?php foreach ($_SESSION['cart'] as $id): ?>
        {
          'name': '<?php echo $products[$id]['name'] ?>',
          'id': '<?php echo $id ?>',
          'price': '<?php echo $products[$id]['price'] ?>',
          'brand': '<?php echo $products[$id]['brand'] ?>',
          'category': '<?php echo $products[$id]['category'] ?>',
          'variant': '<?php echo $products[$id]['variant'] ?>',
          'quantity': 1
        },
   <?php endforeach; ?>

      ]
    }
  }
}];
</script>