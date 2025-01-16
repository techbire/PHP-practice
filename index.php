<?php
echo "hello world";
$abc="\nthis is our first variable";  //variable string

echo $abc;
var_dump ($abc);  //check data type

$arr=array("ansh","gupta",69);  //saving the array
print_r($arr);  // printing the array

$firstnum=35;
$_secondnum=40;
echo"the sum of numbers are: ",$firstnum + $_secondnum;  //summation
echo"\nthe multiplication of numbers are: ",$firstnum * $_secondnum,"\n";  //multiplication

define("let",99); //constant
let==34;  //changing constant value but not will change;
echo let,"\n";




// //calc
// $num1=readline("enter your first number: ");
// $num2=readline("enter your second number: ");
// $op=readline("enter the operation (+,-,*,/,%,**)");
// if(!is_numeric($num1)&&!is_numeric($num2)){
//     echo"enter the integer value";
// }
// switch($op){
//     case'+':$result=$num1+$num2;
//     break;
//     case'-':$result=$num1-$num2;
//     break;
//     case'*':$result=$num1*$num2;
//     break;
//     case'/':$result=$num1/$num2;
//     break;
//     case'%':$result=$num1%$num2;
//     break;
//     case'**':$result=$num1**$num2;
//     break;

// }
// echo"result:",$result;



//tableprinting
$tablenum=5;
for($i=1;$i<=10;$i++){
    echo $tablenum,"*",$i,"=",($tablenum*$i),"\n";
}


// //check number 
// $num1=readline("enter your number: ");
// if(!is_numeric($num1)){
//     echo "this is not a number";
// }
// else{
// if($num1>0){
//     echo"positive number";
// }
// elseif($num1<0){
//     echo"negative number";
// }
// else{echo"equal to 0";}
// }

$str="hello bhaiya\n";
echo $str;
echo "the string length is: ",strlen($abc);




?>
