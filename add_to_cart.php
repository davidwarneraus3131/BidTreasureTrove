<?php
include("include/database.php");
session_start();

if (isset($_POST['product_id'])) {
  $productId = $_POST['product_id'];
  
  // Here, you can perform the necessary logic to add the product to the cart
  // For example, you can store the product ID in a session variable or a database

  // Example: Storing the product ID in a session variable
  $_SESSION['cart'][] = $productId;
  
  // Return a success response
  echo 'success';
} else {
  // Return an error response if the product ID is not provided
  echo 'error';
}
?>