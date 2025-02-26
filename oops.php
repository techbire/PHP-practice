<?php


// // Example of function with one parameter
// function let($a) {
//     echo "Hello, this is the $a function.\n";
// }
// $vari = "Hello student, welcome to EARTH-5.";
// let("example");




// // Example of function with two parameters
// function letWithTwoParams($a, $b) {
//     echo "Hello, this is the $a function with value $b.\n";
// }
// letWithTwoParams("hello", 100);





// // Example of function with string and integer parameters
// function letWithDynamicParams($a, $b) {
//     echo "$a $b\n";
// }
// $vari = "Hello student, welcome to EARTH-5.";
// letWithDynamicParams($vari, 100);




// // Example of passing variables by reference
// function letByReference(&$a, $b) {
//     echo "$a $b%\n";
// }
// $vari = "Hello student, welcome to EARTH-5.";
// letByReference($vari, 100);





// // Function with default parameter values
// function hello($a = "Hey", $b = "LPU") {
//     echo "$a $b\n";
// }
// hello();
// hello("Hi", "Lovely Professional University");





// //Creating class with object

// class Car{
//     public $var;
//     public function setcolor($var){
//     $this->var=$var;
//     echo "the color is: $var";
//     }
// }


// $mycar=new Car();
// $mycar->setcolor("green");



// class Car{
//     public $var;
//     public function setcolor($var){
//     $this->var=$var;
//     echo"our color is <p style='color: $var;'>$var</p>";
// }
// public function getcolor(){
//     return $this->var;
// }
// }
// $mycar= new Car();
// $mycar->setcolor("green");
// echo "car color is: ".$mycar->getcolor();



class Car{
    public $color;
        public function setColor($color){
            $this->color=$color;
        }
public function getColor(){
    return $this->color;
}
}
 
$mycar=new Car();
$mycar->setColor("RED");
echo "the color of the car: ".$mycar->getColor();

?>
