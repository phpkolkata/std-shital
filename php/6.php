<?php
// variable
$a = "raj";
// echo $a;

// array - Numeric
// standard way 1- using array function
// $b = array("a","b","c","d","e","f");

// way 2- array creation using index
// $b[0]="a";
// $b[1]="b";
// $b[2]="c";


// way 3- array creation without index
$b[]="a";
$b[]="b";
$b[]="c";

print "<pre>";
print_r($b);

// echo $b; // wrong
// echo $b[0];
// echo $b[1];
// echo $b[2];
// echo $b[3];

// for($i=0;$i<=4;$i++){
//     echo $b[$i];
// }


// for($i=0;$i<count($b);$i++){
//     echo $b[$i];
// }

foreach($b as $v){
    echo $v."<br>";
}

foreach($b as $k=>$v){
    echo $k."-".$v."<br>";
}

// $weeks = array("sun","mon",...)