<?php
//Require DB connections
require "dbConnect.php";

$query  = "SELECT * FROM Employee LIMIT 3"; //Query #1
$result = mysql_query($query); //Store query in variable $result


//While loop that fetches all data from query ($result) in an array and puts in it variable $row
while ($row = mysql_fetch_array($result)) {
    $fname=$row['fname'];//takes variable $row and looks for fname in array and puts it in variable $fname
    $lname=$row['lname'];//takes variable $row and looks for fname in array and puts it in variable $fname

    echo "<table><thead><tr>"; //begin table
    echo "<th>First Name</th>"; //begin header
    echo "<th>Last Name</th></tr></thead>"; //end header
    echo "<tbody><tr>"; //begin body
    echo "<td>" .$fname. "</td>"; //list data
    echo "<td>" .$lname. "</td>";
    echo "</tr></tbody>";//end body
    echo "</table>";//end table

  
}

mysql_free_result($result);

?>
