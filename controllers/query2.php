<?php
//Require DB connections
require "dbConnect.php";


$query = "SELECT employeeId, fname, lname, address, phoneNum, email
FROM Employee
WHERE fname LIKE 'A%' AND address LIKE 'P.O.%'"; //Query #2
$result = mysql_query($query); //Store query in variable $result

echo "<section id='content'><h2>The information you requested</h2><div id='queries'>";
echo "<table><thead><tr>"; //begin table
      echo "<th>Employee ID</th>";
      echo "<th>First Name</th>"; //begin header
      echo "<th>Last Name</th>"; //end header
      echo "<th>Address</th>";
      echo "<th>Phone Number</th>";
      echo "<th>Email</th></tr></thead>";

//While loop that fetches all data from query ($result) in an array and puts in it variable $row
while ($row = mysql_fetch_array($result)) {
  $eID=$row['employeeId'];
  $fname=$row['fname'];//takes variable $row and looks for fname in array and puts it in variable
  $lname=$row['lname'];
  $addr=$row['address'];
  $phoneNum=$row['phoneNum'];
  $email=$row['email'];


  
         
      echo "<tbody><tr>"; //begin body
      echo "<td>" .$eID. "</td>"; //list data
      echo "<td>" .$fname. "</td>";
      echo "<td>" .$lname. "</td>";
      echo "<td>" .$addr. "</td>";
      echo "<td>" .$phoneNum. "</td>";
      echo "<td>" .$email. "</td>";
      echo "</tr></tbody>";//end body
      


}//end while

echo "</table>";//end table
echo "</div></section>";

mysql_free_result($result);

?>
