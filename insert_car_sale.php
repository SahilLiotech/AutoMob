<?php
session_start();
include('db.php');
$data = array();

$uid = $_SESSION['id'];
$car_id = $_GET['car_id'];

$sql = "INSERT INTO car_sales(uid,carid) VALUES ('$uid','$car_id')";

$result = mysqli_query($conn, $sql);
if ($result) {
  $data['success'] = true;
  $data['message'] = 'You will receive an email regarding the car which you buy....';
} else {
  $data['success'] = false;
  $data['message'] = mysqli_error($conn);
}

echo json_encode($data);
