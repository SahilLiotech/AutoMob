<?php
include('db.php');

session_start();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$address = $_POST['address'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$state = $_POST['state'];

$data = array();

$check = "SELECT * FROM userdata WHERE email='$email'";
$result = mysqli_query($conn, $check);

if (!$result) {
  $data['success'] = false;
  $data['message'] = mysqli_error($conn);
} else {
  $row = mysqli_fetch_assoc($result);
  if ($row) {
    $data['success'] = false;
    $data['message'] = "Email Already Exists. Please Try With Another Email";
  } else {
    $sql = "INSERT INTO userdata (fname, lname, email, password, address, city, zip, state) VALUES ('$fname', '$lname', '$email', '$password', '$address', '$city', '$zip', '$state')";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
      $data['success'] = false;
      $data['message'] = mysqli_error($conn);
    } else {
      $user_id = mysqli_insert_id($conn);
      $data['success'] = true;
      $data['message'] = 'Your Account is created..';
      $_SESSION["id"] = $user_id;
      $_SESSION["fname"] = $fname;
      $_SESSION["lname"] = $lname;
      $_SESSION["email"] = $email;
      $_SESSION["address"] = $address;
      $_SESSION["city"] = $city;
      $_SESSION["zip"] = $zip;
      $_SESSION["state"] = $state;
    }
  }
}

echo json_encode($data);
