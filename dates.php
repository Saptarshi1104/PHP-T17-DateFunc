<?php
echo "Welcome to Date Functions in PHP <br>";

$d = date("d D jS F Y, g:i A l");
echo $d . "<br>";

// Prints something like: Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A') . "<br>";

// Prints: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000)) . "<br>";

$year = date("Y");
echo "Copyright $year | All rights reserved <br>";
?>