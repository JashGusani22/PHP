<?php 
$terms = 10; 
// Starting values 
$num1 = 0; 
$num2 = 1; 
echo "Fibonacci series up to $terms terms: <br>"; 
for ($i = 0; $i < $terms; $i++) { 
echo $num1 . " "; 
// Calculate the next term 
$next = $num1 + $num2; 
$num1 = $num2; 
$num2 = $next; 
} 
?>
