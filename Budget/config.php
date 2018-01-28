<?php
$servername = "localhost";
$username = "root";
$password = "pinipirawako";
$dbname = "budgetsystem";
$charset = 'utf8';

$db = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Change character set to utf8
mysqli_set_charset($db,"utf8");

?>