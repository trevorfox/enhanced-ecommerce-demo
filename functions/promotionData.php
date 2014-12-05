<?php
if (isset($_GET['id'])) {
  $string = file_get_contents("../promotions.json");
  $promotions = json_decode($string, true);
  header('Content-Type: application/json');
  echo json_encode($promotions[$_GET['id']]);
}
?>