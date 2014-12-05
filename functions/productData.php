<?php
if (isset($_GET['id'])) {
  $string = file_get_contents("../products.json");
  $products = json_decode($string, true);
  header('Content-Type: application/json');
  echo json_encode($products[$_GET['id']]);
}
?>