<?php
$link = mysqli_connect("localhost","root","java@123","assign");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?> 