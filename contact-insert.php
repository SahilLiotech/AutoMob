<?php
include('db.php');

session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

$data = array();

$sql = "INSERT INTO contactus (name,email,feedback)Values('$name','$email','$feedback')";

$result = mysqli_query($conn, $sql);

if (!$result) {
  $data['success'] = false;
  $data['message'] = "Something Went Wrong";
} else {
  $data['success'] = true;
  $data['message'] = "Thank you! Your feedback is sent...";
}

echo json_encode($data);
