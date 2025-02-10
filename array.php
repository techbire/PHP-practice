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








// //printing the table
// $data=[
//         ['Student','Mark-1','Mark-2','Mark-3'],
//         ['ansh','54','80','78'],
//         ['ansh','54','80','78'],
//         ['ansh','54','80','78'],
//         ['ansh','54','80','78']
// ];

// echo "<table border='2' cellpadding='5' align='center' style='font-size:40px'>";

//     echo"<th colspan='5' bgcolor='red'>"."STUDENT MARK-SHEET";
//     echo"</th>";

//     foreach($data as $newvar){
//         echo"<tr>";
//         foreach($newvar as $value){
//             echo"<td>";
//             print_r($value);
//             echo"</td>";
//         }
//         echo"</tr>";
//     }
// echo"</table>";







//employee table
// $data=[
//     [' ','Male employees','Female employees','Total employees','Factories'],
//     ['1851','33','34','67','4'],
//     ['1861','33','34','67','4'],
//     ['1871','33','34','67','4'],
//     ['1881','33','34','67','4'],
//     ['1891','33','34','67','4'],
//     ['1901','33','34','67','4'],
// ];


// echo "<table border='2' cellpadding='8' style='font-size:40px'>";

//     foreach($data as $newvar){
//         echo"<tr >";
//         foreach($newvar as $value){
//             echo"<td style='font-size:40px; text-align: center;'>";
//             print_r($value);
//             echo"</td>";
//         }
//         echo"</tr>";
//     }
// echo"</table>";


// $data=["first","second","third"];
// $new=["one",'two','three'];
// print_r($data);
// echo "<br>";
// array_pop($data);
// echo "<br>";
// print_r($data);
// echo "<br>";

// array_shift($data);
// print_r($data);
// echo"<br>";
// array_push($data,"forth");
// print_r($data);
// echo"<br>";
// array_unshift($data,"zeroth");
// print_r($data);








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