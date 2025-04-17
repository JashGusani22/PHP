<?php
funcƟon getMinNotes(int $amount): array {
 $denominaƟons = [100, 50, 20, 10, 5, 2, 1];
 $result = [];

 foreach ($denominaƟons as $note) {
 if ($amount >= $note) {
 $count = intdiv($amount, $note);
 $result[$note] = $count;
 $amount -= $count * $note;
 }
 }

 return $result;
}

$amount = 289;
$notes = getMinNotes($amount);

echo "Minimum notes for Rs. $amount:\n";
foreach ($notes as $note => $count) {
 echo "Rs. $note x $count<br>";
}
?> 
