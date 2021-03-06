<?php
//Require DB connections
require "dbConnect.php";


$query = "SELECT c.employeeId, e.fname, e.lname, e.phoneNum, SUM(c.price)
FROM Employee e, Calls c
WHERE e.employeeId = c.employeeId
GROUP BY  c.employeeId
HAVING SUM(c.employeeId) > 10";


$result = mysql_query($query); //Store query in variable $result

  echo "<section id='content'><h2>The information you requested</h2><div id='queries'>";
  echo "<table><thead><tr>"; //begin table
  echo "<th>Employee ID</th>"; //begin header
  echo "<th>First Name</th>";
  echo "<th>Last Name</th>";
  echo "<th>Phone Number</th>";
  echo "<th>Price</th></tr></thead>";

//While loop that fetches all data from query ($result) in an array and puts in it variable $row
while ($row = mysql_fetch_array($result)) {
    $eID=$row['employeeId'];
    $fname=$row['fname'];//takes variable $row and looks for fname in array and puts it in variable $fname
    $lname=$row['lname'];
    $phoneNum=$row['phoneNum'];
    $price=$row['price'];
	$price=number_format($price, 2);


    echo "<tbody><tr>"; //begin body
    echo "<td>" .$eID. "</td>"; //list data
    echo "<td>" .$fname. "</td>";
    echo "<td>" .$lname. "</td>";
    echo "<td>" .$phoneNum. "</td>";
    echo "<td>$" .$price. "</td>";
    echo "</tr></tbody>";//end body

    }
    echo "</table>";//end table
	echo "</div></section>";
mysql_free_result($result);

?>
