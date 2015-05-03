<?php
$servername = "localhost";
$username = "dummy";
$password = "lamepassword";

// Create connection
$conn =  mysql_connect($localhost, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$db_selected = mysql_select_db('PhoneRecords', $conn);
if (!$db_selected) {
  die ('Can\'t use Phone Records : ' . mysql_error());
}

?>
