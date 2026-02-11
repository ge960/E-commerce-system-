<?php
// Test My Account page
$_GET['role'] = 'customer';
ob_start();
require 'My Account .php';
$output = ob_get_clean();
if (strpos($output, 'Welcome, Jane Doe') !== false && strpos($output, 'Recent Orders') !== false) {
  echo 'PASS: Customer view works';
} else {
  echo 'FAIL: Missing customer content';
}
?>
