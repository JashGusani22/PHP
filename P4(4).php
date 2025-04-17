<?php 
// Define the number for which to display the multiplication table 
$number = 5; 
// Define how many multiples you want to show 
$limit = 10; 
echo "Multiplication Table for $number:<br><br>"; 
for ($i = 1; $i <= $limit; $i++) { 
$result = $number * $i; 
echo "$number x $i = $result <br>"; 
} 
?>
