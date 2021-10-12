<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
    <style>
        ::selection{
            background: rgb(28, 63, 68);
            color: rgb(255, 255, 255);
        }
        .container h1{
            background: #25646a;
            color: white;
            padding: 23px;
            text-align: center;
        }
        .container .section{
            background: rgb(192, 225, 235);
            color: black;
            
        }
    </style>
</head>
<body>
    <div class="container">
<H1>This is Basic PHP Tutorial</H1>
<div class="section">
<?php
echo "Let's Go Party<br>";

// Use of If/else/elseif in PHP
$age = 8;
if ($age>=65) {
    echo "<p>You are the Party Master (^_^) </p>";
} 
elseif ($age>=18) {
echo "<p>You Can Go to The Party YOLO</p>";
}
else {
    echo "<p>Play FreeFire at Home</p><br>";
}

// Arrays in PHP

$language = array("python","Java","Node Js","Swift","PHP", 24);

// echo $language[5]."<br>";
// echo count($language);

// Loops In PHP
// While Loops
$a = 0;
while ($a <= 10) {
    echo "The value of a is ".$a."<br>";
    $a++;
}
$a = 0;

// Iterating Arrays using while loops
while ($a < count($language)) {
    echo "The value of Language is ".$language[$a]."<br>";
    $a++;
}
// DO While Loops
$a = 0;
do {
    echo "the value of Variable 'a' is ".$a."<br>";
    $a++;
} while ($a <=10);

// For Loops 
for ($a=0; $a <= 10; $a++) { 
    echo "For loop in PHP ".$a."<br>";
}

// ForEach Loops
foreach ($language as $value) {
    echo "Foreach Loops value ".$value."<br>";
    }





//  Functions is PHP
function rafi ($number){
    echo "Your number is ".$number."<br>";
}

rafi(12);
rafi(2);
rafi(3);
rafi(13);
rafi(456);
rafi(-156);

// Strings in PHP

$str = "amirul";
echo $str."<br>";
// $lenn = strlen($str);
$lenn = str_word_count($str);
// $lenn = count($str);   <-- Only Work with Obj and arrays
echo $lenn;

        ?></div>
    </div>
</body>
</html>