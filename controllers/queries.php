<?php
require "dbConnect.php";

$query  = "SELECT * FROM Employee LIMIT 3"; //example of query
$result = mysql_query($query);

//Check if query worked
//if (!$result) {
//    echo "DB Error, could not query the database\n";
//    echo 'MySQL Error: ' . mysql_error();
//    exit;
//}

//While loop that prints all results until there are no more in table

while ($row = mysql_fetch_array($result)) {
    $fname=$row['fname'];
    $lname=$row['lname'];

    echo "<table><thead><tr>";
    echo "<th>First Name</th>";
    echo "<th>Last Name</th></tr></thead>";
    echo "<tbody><tr>";
    echo "<td>" .$fname. "</td>";
    echo "<td>" .$lname. "</td>";
    echo "</tr></tbody>";
    echo "</table>";

    //echo "<ul>";
    //echo "<li>".$fname."</li>";
    //echo "<li>".$lname."</li>";
    //echo "</ul>";
}

mysql_free_result($result);

?>
