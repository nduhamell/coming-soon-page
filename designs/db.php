<?php
// To be included in same directory as form page
// Enter your Host, username, password, database below.
$con = mysqli_connect("localhost","dbusername","dbpassword","dbname");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>