<?php
// $second=array("hello","ansh","and","harsh");
// $first=["hey","b.tech","year"];
// print_r(array_merge($first,$second));

// $a = array(22, 13, 43, 5);

// echo "Max: " . max($a) . "\n";
// echo "Min: " . min($a) . "\n";

// sort($a);
// echo "Sorted Array: ";
// print_r($a);

// $sum=0;
// for($i=0;$i<4;$i++){
//     $sum+=$a[$i];
// }

// echo "Sum: ",$sum;

// //associative array
// $data=[
//     ['name'=>'php',
//     'roll no'=>'37',
//     'class'=>'btech',
// ]
// ];
// print_r($data);

// //pre tag is used in echo for format like terminal identation







$data=["first","second","third"];
$new=["one",'two','three'];
echo "<pre>";
$our=array_combine($data,$new);
print_r($our);
echo "</pre>";


$data=[
    'name'=>'ansh',
    'class'=>'btech',
    'rollno'=>'03',
];
$new=[
    'name'=>'abc',
    'subject'=>'cse',
];
$our=array_merge($data,$new);
print_r($our);
$our=array_merge_recursive($data,$new);
print_r($our);

?>