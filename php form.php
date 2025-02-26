<?php


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






$data=[['name','219','229','221'],['aman','8','9','6'],['ishu','3','4','5'],['siza','3','4','4']];

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

echo "<table border='4' cellpadding='6' style='font-size:40px'>";
foreach($data as $row){
echo"<tr>";
foreach($row as $col){
echo"<td>";
print_r($col);
echo"</td>";
}
echo"</tr>";
}
echo"</table>";






?>