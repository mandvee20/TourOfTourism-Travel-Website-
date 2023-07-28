<?php
// variables
$name = "manas  ";
$income = 200000;
$str = " hey there am learning php";
echo " this guy is $name and income is $income <br> ";

/* 
php data types 
1. string
2.integer
3. float
4. boolen
5.object
6/ array
7. NULL
*/
echo "<hr>";
$x = true;
$is_friend = false;
echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);
$friend = array("manas","daksh","anurag");
echo var_dump($friend);
echo "<br>";
echo $friend[0];
echo "<br>";
echo $friend[1];
echo "<br>";
echo $friend[2];
echo "<br>";
echo "<hr>";
// dot operator to join the string with the number
echo "the length of my string is " .strlen($name);
echo str_word_count($name);
echo "<br>";
echo strrev($str);
echo "<br>";
echo strpos($str , "am");

echo str_replace("manas" , "sanam" , $name);
echo "<br>";
echo str_repeat($name,18);
echo "<br>";
echo "<pre>";
echo rtrim ("    this is me the great     ");
echo "<br>";

echo ltrim ("     this is me the great     ");
echo "</pre>";
echo "<hr>";
#operators
$a = 5;
$b = 45;
echo $a+$b;
echo "<br>";
echo $a-$b;
echo "<br>";
echo $a*$b;
echo "<br>";
echo $b/$a;
echo "<br>";
echo $b**$a;
echo "<br>";
echo $b%$a;

#and or operator ($m or $n)
# || or and && and
#not - !

// if else same as c++

$age = 60;
if($age <18){
    echo " you can drnik";
}elseif($age <70){
    echo " \n leave everything";
}else{
    echo "\n drink water";
}
echo "<hr>";

// loops as it is in c++

//for each loop
$arr = array("a","b","c","d","e");

foreach($arr as $value){
    echo "$value <br>";
}
// functions 

function marks($marr){
    $sum=0;
    foreach($marr as $val){
        $sum += $val;
    }
    return $sum;
}

$msd = [56,98,78,86,28,75];
$summ = marks($msd);
echo "total marks obtained by manas is $summ <br> <hr>";

// size of array using inbult function
echo count($msd);


// date function in php
$d = date("d S F , l");
echo "todays date is $d";

//associate arrays
$aray = array("hey" =>" is", "hello"=>"am" ,"namaste"=>"are" ,"yo"=>"honey" , 9=> "nine"); 
echo "<br>";
echo $aray["yo"];

foreach ($aray as $key => $valu) {
    echo "this mean of $key is $valu <br> ";
}

//mutli dim array 
$multidam = array(array(2,5,6,8), array(1,5,6,5),array(9,8,5,0));
echo "<br>";
//Secho var_dump($multidam);

echo "<br>";
echo "<br>";
echo $multidam[1][0];
echo "<hr>";

//global variable
$m = 789;
$n = 123;
echo "the value of m and n are $m and $n <br>";
function printv(){
    global $m , $n;
    $m =87;
    $n =778;
    echo "the value of m and n are $m and $n <br>";
}
printv();



?>
