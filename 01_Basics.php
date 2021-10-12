<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
    <style>
        ::selection {
            background: #000;
            color: white;
        }
        ::-moz-selection {
            background: #000;
            color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
<a class="navbar-brand" href="#">My PHP</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Home</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#">Branches</a>
    </li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Intrest Rates
    </a>
    <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="#">Loan</a></li>
        <li><a class="dropdown-item" href="#">Trading</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Manefacturing Cost</a></li>
    </ul>
    </li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Schedule of Changes
    </a>
    <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="#">Main Deposit</a></li>
        <li><a class="dropdown-item" href="#">Intrest Rates per (Local Currency)</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Avg. balance below Tic 50,000</a></li>
    </ul>
    </li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Bank Note Security
    </a>
    <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="#">Fixed Deposit Receipt</a></li>
        <li><a class="dropdown-item" href="#">Notes Of Different Currency</a></li>
    </ul>
    </li>
    
</ul>
<form class="d-flex">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-light" type="submit">Search</button>
</form>
</div>
</div>
</nav>

<div class="contaiter"><h1>This is My First PHP website</h1>
<?php
// constant variable
define ("PI", 3.1416);
// Constant variable only count the first assignd value
define ("PI", "Tasin");
    // PHP is case sensetive 
    // and PHP have no datatype



    echo "This Is Writen in PHP Ula la";
    ?>
    <?php echo "Hello World Again with PHP";
    echo "<br> First Variable = ";
    echo $var1= 420;
    echo "<br> Secound Variable = ";
    echo $var2= 24;
    echo "<br><h1>Arithmetic Opperators</h1>";
    echo "<br> The Subtraction of the two is ";
    $var3 = $var1 - $var2;
    eCho $var3;
    echo "<br> The Addition of the two is ";
    $var4 = $var1 + $var2;
    eCho $var4;
    echo "<br> The Multiplication of the two is ";
    $var5 = $var1 * $var2;
    eCho $var5;
    echo "<br> The Divition of the two is ";
    $var6 = $var1 / $var2;
    eCho $var6;
    echo "<br>";


// Assignment Operators
echo "<h1> Assignment Opperators </h1><br>";
    $newVar = $var1;
        $newVar += 5;
        // $newVar -= 5;
        // $newVar *= 5;
        // $newVar /= 5;
    echo "The value of newVar is <br>";
    echo $newVar;
    echo "<br>";
    


// Comparision Opperators
 echo "<h1>Comparision Opperators </h1><br>";
 echo "The value of 1==4 is ";
 var_dump(1==4);
 echo "<br>";
 echo "The value of 1!=4 is ";
 var_dump(1!=4);
 echo "<br>";
 echo "The value of 1<=4 is ";
 var_dump(1<=4);
 echo "<br>";
 echo "The value of 1>=4 is ";
 var_dump(1>=4);
 echo "<br>";


// Increment/ Drecement Opperators
// echo $var1++; 
// echo $var1--;
// echo ++$var1;
// echo --$var1;
echo "<br>".$var1;

// Logical Opperators
// and (&&)
// or (||)
// xor
// not !

$myVar = (true and false);
$myVar = (true and true);
$myVar = (false and false);
$myVar = (true or true);
$myVar = (true or false);
$myVar = (false or false);
$myVar = (true xor false);
$myVar = (true xor true);

echo var_dump($myVar);

echo "<br><h1>Datatypes in PHP</h1><br>";
    // Datatype In PHP
    // 1. String
    // 2. Integer
    // 3. Float
    // 4. Boolean
    // 5. Array
    // 6. Object    
    
    // $var = "this is a string";
    // $var = 67;
    // $var = 67.5;
    $var = true;
    // $var =() {
    //     binary: 56,
    //     hex: A5
    // };
    // $var = array('Rafi',23 );
    echo var_dump($var);
    echo "<br>";

    echo PI;

echo "<br><br><br><h1>The END</h1>";
    ?>
            

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</html>