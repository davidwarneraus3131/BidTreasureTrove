<?php
include("include/conn.php");

$vendor_id = $_POST['vendor_id'];

$sql = "SELECT * FROM `vendor_details` WHERE `vendor_id`='$vendor_id' ";
$result = mysqli_query($conn, $sql);
$row = $result -> fetch_assoc();
// echo '<pre>'.print_r($row).'</pre>';exit;

$json_data = json_encode($row);

// Set headers for JSON response
header('Content-Type: application/json');
header('Content-Length: ' . strlen($json_data));

// Send JSON response
echo $json_data;
?>