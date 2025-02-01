<?php
include('db.php');
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
$data = array();

$check = "SELECT * FROM userdata WHERE email='$email'";
$result = mysqli_query($conn, $check);

if (!$result) {
  $data['success'] = false;
  $data['message'] = mysqli_error($conn);
} else {
  $row = mysqli_fetch_assoc($result);

  if (!$row) {
    $data['success'] = false;
    $data['message'] = 'User with this email does not exist.';
  } else {
    if (password_verify($password, $row['password'])) {
      $data['success'] = true;
      $data['message'] = 'Login successfully done';
      $_SESSION["id"] = $row['uid'];
      $_SESSION["fname"] = $row['fname'];
      $_SESSION["lname"] = $row['lname'];
      $_SESSION["email"] = $row['email'];
      $_SESSION["address"] = $row['address'];
      $_SESSION["city"] = $row['city'];
      $_SESSION["zip"] = $row['zip'];
      $_SESSION["state"] = $row['state'];
    } else {
      $data['success'] = false;
      $data['message'] = 'Incorrect password. Please try again.';
    }
  }
}

echo json_encode($data);
