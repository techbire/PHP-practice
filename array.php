<?php
$second=array("hello","ansh","and","harsh");
$first=["hey","b.tech","year"];
print_r(array_merge($first,$second));

$a = array(22, 13, 43, 5);

echo "Max: " . max($a) . "\n";
echo "Min: " . min($a) . "\n";

sort($a);
echo "Sorted Array: ";
print_r($a);

$sum=0;
for($i=0;$i<4;$i++){
    $sum+=$a[$i];
}

echo "Sum: ",$sum;

?>