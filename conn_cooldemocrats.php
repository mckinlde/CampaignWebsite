<?php

$conn = mysqli_connect('localhost', 'root', '', cooldemocrats);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
