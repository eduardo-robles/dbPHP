<?php
//Require DB connections
require "dbConnect.php";

$query  = "SELECT employeeId, SUM(price) AS TotalEmployeeCost
FROM Calls
GROUP BY employeeId
HAVING TotalEmployeeCost > 2"; //Query #1
$result = mysql_query($query); //Store query in variable $result


//While loop that fetches all data from query ($result) in an array and puts in it variable $row
while ($row = mysql_fetch_array($result)) {
    $eID=$row['employeeId'];
    $price=$row['TotalEmployeeCost'];


    echo "<table><thead><tr>"; //begin table
    echo "<th>Employee ID</th>"; //begin header
    echo "<th>Total Expenses</th></tr></thead>"; //end header
    echo "<tbody><tr>"; //begin body
    echo "<td>" .$eID. "</td>"; //list data
    echo "<td>" .$price. "</td>";
    echo "</tr></tbody>";//end body
    echo "</table>";//end table


}

mysql_free_result($result);

?>
