<script>
dataLayer = [{
  'ecommerce': {
    'detail': {
      'products': [{
        'name': '<?php echo $products[$id]['name'] ?>',
        'id': '<?php echo $id ?>',
        'price': '<?php echo $products[$id]['price'] ?>',
        'brand': '<?php echo $products[$id]['brand'] ?>',
        'category': '<?php echo $products[$id]['category'] ?>',
        'variant': '<?php echo $products[$id]['variant'] ?>',
      }]
    }
  }
}];
</script>