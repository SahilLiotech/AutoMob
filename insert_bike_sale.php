<?php
session_start();
include('db.php');
$data = array();

$uid = $_SESSION['id'];
$bike_id = $_GET['bike_id'];

$sql = "INSERT INTO bike_sales(uid,bikeid) VALUES ('$uid','$bike_id')";

$result = mysqli_query($conn, $sql);
if ($result) {
  $data['success'] = true;
  $data['message'] = 'You will receive an email regarding the bike which you buy....';
} else {
  $data['success'] = false;
  $data['message'] = mysqli_error($conn);
}

echo json_encode($data);
