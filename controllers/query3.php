<?php
//Require DB connections
require "dbConnect.php";

$query  = "SELECT MAX(price) AS MostExpensive, MIN(price) AS LeastExpensive,
SUM(price) AS TotalExpenses
FROM Calls;"; //Query #3
$result = mysql_query($query); //Store query in variable $result

	echo "<section id='content'><h2>The information you requested</h2><div id='queries'>";
	echo "<table><thead><tr>"; //begin table
    echo "<th>Most Expensive</th>"; //begin header
    echo "<th>Least Expensive</th>";
    echo "<th>Total Expenses</th></tr></thead>"; //end header

//While loop that fetches all data from query ($result) in an array and puts in it variable $row
while ($row = mysql_fetch_array($result)) {
    $mExps=$row['MostExpensive']; //takes variable $row and looks for fname in array and puts it in variable
    $lExps=$row['LeastExpensive'];
    $tExps=$row['TotalExpenses'];
	$mExps=number_format($mExps, 2);
	$lExps=number_format($lExps, 2);
	$tExps=number_format($tExps, 2);

    
    echo "<tbody><tr>"; //begin body
    echo "<td>$" .$mExps. "</td>"; //list data
    echo "<td>$" .$lExps. "</td>";
    echo "<td>$" .$tExps. "</td>";
    echo "</tr></tbody>";//end body
    
}//end while
echo "</table>";//end table
echo "</div></section>";
mysql_free_result($result);

?>
