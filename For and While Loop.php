<?php
// Summation of 1 to 10 using for loop
echo "Summation of 1 to 10 using for loop :<br>";
$first_number = 1;
$last_number = 10;
$sum = 0;
for($i = $first_number; $i<=$last_number; $i++){
	$sum = $sum + $i;
}
echo "Summation of ",$first_number," into ",$last_number, " is ",$sum; 

// Summation of 1 to 10 using While loop
echo "<br><br><br>Summation of 1 to 10 using for While loop :<br>";
$first_number = 1;
$last_number = 10;
$sum = 0;
$i = $first_number;
while($i<=$last_number){
	$sum = $sum + $i;
	$i++;
}
echo "Summation of ",$first_number," into ",$last_number, " is ",$sum;

?>