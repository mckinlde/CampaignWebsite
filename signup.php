<?php

include 'conn_cooldemocrats.php';

$date = 'DateTime';
$first_name = $_POST['user_first_name'];
$last_name = $_POST['user_last_name'];
$email = $_POST['user_mail'];
$phone = $_POST['user_phone'];
$register = $_POST['register'];
$phonebank = $_POST['phonebank'];
$canvas = $_POST['canvas'];

$sql = "INSERT INTO volunteers (date, first_name, last_name, email, phone, register, phonebank, canvas)
 VALUES ('$date', '$first_name', '$last_name', '$email', '$phone', '$register', '$phonebank', '$canvas')";
$result = $conn->query($sql);

header('Location: index.php');
