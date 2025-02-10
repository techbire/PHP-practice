<?php
// echo "hello world";
// $abc="\nthis is our first variable";  //variable string

// echo $abc;
// var_dump ($abc);  //check data type

// $arr=array("ansh","gupta",69);  //saving the array
// $arr1=["ansh",1]; //other way

// print_r($arr);  // printing the array
// print_r($arr1); //other way

// $firstnum=35;
// $_secondnum=40;
// echo"the sum of numbers are: ",$firstnum + $_secondnum;  //summation
// echo"\nthe multiplication of numbers are: ",$firstnum * $_secondnum,"\n";  //multiplication

// define("let",99); //constant
// let==34;  //changing constant value but not will change;
// echo let,"\n";




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



// //tableprinting
// $tablenum=5;
// for($i=1;$i<=10;$i++){
//     echo $tablenum,"*",$i,"=",($tablenum*$i),"\n";
// }


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

// $str="hello bhaiya\n";
// echo $str;
// echo "the string length is: ",strlen($abc);



//area of rectangle

// $l=readline("enter the length: ");
// $b=readline("enter the breadth: ");
// echo "area of rectangle: ",$l*$b;

//percentage of marks

// $marks=[];
// for($i=1;$i<=5;$i++){
//     echo "enter the $i subject: ";
//     $marks[] =readline();
// }
// echo "Percentage: ",(array_sum($marks) / count($marks)),"%\n";






// // How to define a constant
// define("NAME", 90, true);
// echo NAME . "\n";





// // Function to greet a student
// function greetStudent($stud) {
//     echo "Hello! $stud\n";
// }
// greetStudent("Ansh");





// // Anonymous function example
// $var = function($stud) {
//     echo "Hello $stud\n";
// };
// $var("Ansh");





// // Using anonymous function in echo
// echo $var("class") . "How are you?\n";





// // foreach loop
// $name=["ishuraj","manish","rithik"];
// foreach($name as $b){
//     echo "hello hi $b \n";
// }







// Loop example
// for ($i = 1; $i <= 10; $i++) {
//     echo "Iteration $i\n";
// }


// //If else condition example


// $nos=readline("Enter your number of subjects: ");
// $arr=array();
// $total=0;
// for($i = 1; $i <= $nos; $i++) {
//     $arr[$i - 1] = readline("Enter your $i subject marks: ");
// }

// for($i = 0; $i < $nos; $i++) {
//     $total += $arr[$i];
// }

// $per=$total/$nos;
// echo "Percentage: " . $per . "%\n";

// if($per>=60){
//     echo"\nFirst Division";
// }
// else if($per>=45&&$per<60){
//     echo"\nSecond Division";
// }
// else if($per>=33&&$per<45){
//     echo"\nThird Division";
// }
// else{echo"\nPadhle Bhai!!\nFail Hai tu.";}




//Show day of the week using switch

// $num=readline("Enter your number: ");

// switch($num){
//     case'1':$result="Sunday";
//     break;
//     case'2':$result="Monday";
//     break;
//     case'3':$result="Tuesday";
//     break;
//     case'4':$result="Wednesday";
//     break;
//     case'5':$result="Thursday";
//     break;
//     case'6':$result="Friday";
//     break;
//     case'7':$result="Saturday";
//     break;
    
// }
// echo"Result:",$result;






//Factorial
// $num=readline("Enter your number: ");
// $factorial=1;
// while($num>0){
// $factorial*=$num;
// $num--;
// }
// echo $factorial;



$n = readline('Number batao: ');
if ($n < 2) echo("Invalid number\n");

for ($i = 2; $i * $i <= $n; $i++) {
    if ($n % $i == 0) echo("$n is not a prime number\n");exit();
}

echo "$n is a prime number\n";

 



?>
                                                                                                                       