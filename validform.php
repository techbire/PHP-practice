<?php
$name=$_GET['a'];
$number=$_GET['c'];
$email=$_GET['b'];
echo $email."<br>";
echo $number."<br>";
echo $name."<br>";
$url="https://www.google.com";


if(filter_var($url,FILTER_VALIDATE_URL)){
    echo"hello";
}
else{
    echo"bye";
}



$email=filter_var($email,FILTER_SANITIZE_EMAIL);
if(filter_var($email,FILTER_SANITIZE_EMAIL)){
    echo"this is valid email"."<br>";
    echo $email;
}
else{
    echo"check the email id";
}

?>