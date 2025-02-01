<?php
session_start();
include('db.php');
$data = array();

$uid = $_SESSION['id'];
$scooter_id = $_GET['scooter_id'];

$sql = "INSERT INTO scooter_sales(uid,scooterid) VALUES ('$uid','$scooter_id')";

$result = mysqli_query($conn, $sql);
if ($result) {
  $data['success'] = true;
  $data['message'] = 'You will receive an email regarding the scooter which you buy....';
} else {
  $data['success'] = false;
  $data['message'] = mysqli_error($conn);
}

echo json_encode($data);
