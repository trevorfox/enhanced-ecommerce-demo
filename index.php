<?php
session_start();
$string = file_get_contents("products.json");
$products = json_decode($string, true);
$string = file_get_contents("promotions.json");
$promotions = json_decode($string, true);
$string = file_get_contents("config.json");
$config = json_decode($string, true);
?>
<?php require ('inc/head.php') ?>
<div class="content">
  
<?php
if ($_GET['page'] == 'cart') {
  require ('gtm/gtm__cart.php');
  require ('gtm/gtm.php');
  require ('pages/products--back.php');
  require ('pages/checkout__cart.php');
}
elseif ($_GET['page'] == 'pay') {
  require ('gtm/gtm__pay.php');
  require ('gtm/gtm.php');
  require ('pages/products--back.php');
  require ('pages/checkout__pay.php');
}
elseif ($_GET['page'] == 'receipt') {
  require ('gtm/gtm__receipt.php');
  require ('gtm/gtm.php');
  require ('pages/products--back.php');
  require ('pages/checkout__receipt.php');
}
elseif ($_GET['page'] == 'product') {
  $id = $_GET['id'];
  require ('gtm/gtm__product.php');
  require ('gtm/gtm.php');
  require ('pages/products__cart.php');
  require ('pages/products--back.php');
  require ('pages/product.php');
}
else {
  require ('gtm/gtm__products.php');
  require ('gtm/gtm.php');
  require ('pages/products__cart.php');
  require ('pages/products.php');
  require ('pages/promotions.php');
  require ('inc/footer.php');
}
?>
</div>
<?php require ('inc/foot.php') ?>