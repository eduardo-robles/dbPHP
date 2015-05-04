<?php
//Require DB connections
require "dbConnect.php";

$query  = "SELECT * FROM Employee WHERE employeeId IN (
SELECT DISTINCT employeeId FROM Calls)"; //Query #5
$result = mysql_query($query); //Store query in variable $result

	echo "<section id='content'><h2>The information you requested</h2><div id='queries'>";
	echo "<table><thead><tr>"; //begin table
    echo "<th>Employee ID</th>";
    echo "<th>First Name</th>";
    echo "<th>Last Name</th>";
    echo "<th>Title</th>";
    echo "<th>Address</th>";
    echo "<th>Phone Number</th>";
    echo "<th>Email</th>";
    echo "<th>Division ID</th>";//end table header


//While loop that fetches all data from query ($result) in an array and puts in it variable $row
while ($row = mysql_fetch_array($result)) {
  $eID=$row['employeeId']; //takes variable $row and looks for fname in array and puts it in variable
  $fname=$row['fname'];
  $lname=$row['lname'];
  $title=$row['title'];
  $addr=$row['address'];
  $phoneNum=$row['phoneNum'];
  $email=$row['email'];
  $dID=$row['divisionId'];

    
    echo "<tbody><tr>"; //begin body
    echo "<td>".$eID."</td>"; //list data
    echo "<td>" .$fname. "</td>"; 
    echo "<td>" .$lname. "</td>";
    echo "<td>".$title."</td>";
    echo "<td>".$addr."</td>";
    echo "<td>".$phoneNum."</td>";
    echo "<td>".$email."</td>";
    echo "<td>".$dID."</td>";
    echo "</tr></tbody>";//end body
    


}//end while
echo "</table>";//end table
echo "</div></section>";
mysql_free_result($result);

?>
