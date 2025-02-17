<?php
$A = 0;
$B = 0;
echo "Player A Turn\n";
while(true) {
    $roll = rand(1, 6);
    echo "Dice : $roll \n";
    if($roll == 6) break;
    if($roll%2 == 1) $A += 10;
    echo "A score : $A\n";
}
echo "\nPlayer B Turn\n";
while(true) {
    $roll = rand(1, 6);
    echo "Dice : $roll \n";
    if($roll == 6) break;
    if($roll%2 == 1) $B += 10;
    echo "B score : $B\n";
}
echo "A final score: $B\n";
echo "Game End\n";
if($A>$B) echo "A WON THE GAME==$A";
else echo "B WON THE GAME==$B";
?>