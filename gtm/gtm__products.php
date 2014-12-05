<script>
dataLayer = [{
  'ecommerce': {
    'impressions': [
 <?php foreach ($products as $id => $product): ?>
      {
        'name': '<?php echo $products[$id]['name'] ?>',
        'id': '<?php echo $id ?>',
        'price': '<?php echo $products[$id]['price'] ?>',
        'brand': '<?php echo $products[$id]['brand'] ?>',
        'category': '<?php echo $products[$id]['category'] ?>',
        'variant': '<?php echo $products[$id]['variant'] ?>',
        'list': '<?php echo $config['listName'] ?>',
        'position': <?php echo $id+1 ?>
      },
 <?php endforeach; ?>

   ],
   'promoView': {
     'promotions': [
<?php foreach ($promotions as $id => $promotion): ?>
       {
         'id': '<?php echo $id ?>',
         'name': '<?php echo $promotion['name'] ?>',
         'creative': '<?php echo $promotion['creative'] ?>',
         'position': '<?php echo $promotion['position'] ?>',
       },
<?php endforeach; ?>

     ]
   }
  }
}];
</script>