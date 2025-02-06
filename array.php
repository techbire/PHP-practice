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


//printing the table
$data=[
        ['Student','Mark-1','Mark-2','Mark-3'],
        ['ansh','54','80','78'],
        ['ansh','54','80','78'],
        ['ansh','54','80','78'],
        ['ansh','54','80','78']
];

echo "<table border='2' cellpadding='5' align='center' style='font-size:40px'>";

    echo"<th colspan='5' bgcolor='red'>"."STUDENT MARK-SHEET";
    echo"</th>";

    foreach($data as $newvar){
        echo"<tr>";
        foreach($newvar as $value){
            echo"<td>";
            print_r($value);
            echo"</td>";
        }
        echo"</tr>";
    }
echo"</table>";







?>