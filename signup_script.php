<?php
require "includes/common.php";
session_start();

$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);

$pass = $_POST['password'];
$pass = mysqli_real_escape_string($con, $pass);


$name = $_POST['name'];
$name = mysqli_real_escape_string($con, $name);


$contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);

  $city = $_POST['city'];
  $city = mysqli_real_escape_string($con, $city);

  $address = $_POST['address'];
  $address = mysqli_real_escape_string($con, $address);

$query = "SELECT * from users where email='$email'";
$result = mysqli_query($con, $query);
$num = mysqli_num_rows($result);
if ($num != 0) {

    $m = "Email Already Exists";
    header('location: index.php?error=' . $m);

} else {
    $quer = "INSERT INTO users(email,name,contact, city, address, password) values('$email','$name','$contact','$city','$address','$pass')";
    mysqli_query($con, $quer);

    echo "New record has id: " . mysqli_insert_id($con);
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location:login.php');
}
?>