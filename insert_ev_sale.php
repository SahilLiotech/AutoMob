<?php
session_start();
include('db.php');
$data = array();

$uid = $_SESSION['id'];
$ev_id = $_GET['ev_id'];

$sql = "INSERT INTO ev_sales(uid,evid) VALUES ('$uid','$ev_id')";

$result = mysqli_query($conn, $sql);
if ($result) {
  $data['success'] = true;
  $data['message'] = 'You will receive an email regarding the EV which you buy....';
} else {
  $data['success'] = false;
  $data['message'] = mysqli_error($conn);
}

echo json_encode($data);
