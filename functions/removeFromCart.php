<?php
session_start();
if (isset($_GET['cartid'])) {
  unset($_SESSION['cart'][$_GET['cartid']]);
}
?>