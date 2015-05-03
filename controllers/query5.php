<?php
//Require DB connections
require "dbConnect.php";

$query  = "SELECT * FROM Employee WHERE employeeId IN (
SELECT DISTINCT employeeId FROM Calls)"; //Query #5
$result = mysql_query($query); //Store query in variable $result


//While loop that fetches all data from query ($result) in an array and puts in it variable $row
while ($row = mysql_fetch_array($result)) {
  $eID=$row['employeeId'];
  $fname=$row['fname'];//takes variable $row and looks for fname in array and puts it in variable $fname
  $lname=$row['lname'];//takes variable $row and looks for fname in array and puts it in variable $fname
  $title=$row['title'];
  $addr=$row['address'];
  $phoneNum=$row['phoneNum'];
  $email=$row['email'];
  $dID=$row['divisionId'];

    echo "<table><thead><tr>"; //begin table
    echo "<th>Employee ID</th>";
    echo "<th>First Name</th>";
    echo "<th>Last Name</th>";
    echo "<th>Title</th>";
    echo "<th>Address</th>";
    echo "<th>Phone Number</th>";
    echo "<th>Email</th>";
    echo "<th>Division ID</th>";//end table header
    echo "<tbody><tr>"; //begin body
    echo "<td>".$eID."</td>";
    echo "<td>" .$fname. "</td>"; //list data
    echo "<td>" .$lname. "</td>";
    echo "<td>".$title."</td>";
    echo "<td>".$addr."</td>";
    echo "<td>".$phoneNum."</td>";
    echo "<td>".$email."</td>";
    echo "<td>".$dID."</td>";
    echo "</tr></tbody>";//end body
    echo "</table>";//end table


}

mysql_free_result($result);

?>
