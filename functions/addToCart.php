<?php
session_start();
if (isset($_GET['id'])) {
  $_SESSION['cart'][] = $_GET['id'];
  echo 0;
}
?>