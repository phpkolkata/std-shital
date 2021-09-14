<?php
// Functions
// 1. Predefined functions
// 2. Userdefined functions

// Function Points
// 1. function name
// 2. arguments/parameters
// 3. optional parameters
// 4. processed function / return function
// 5. return type

function hello(){
    echo "hello";
}

hello();
hello();

function add($v1,$v2){
    $total = $v1+$v2;
    return $total;
}

function substract($v1,$v2){
    return $v1-$v2;
}

function divide($v1,$v2){
    return $v1/$v2;
}

function multiply($v1,$v2){
    return $v1-$v2;
}

$tot = add(20,30);
echo $tot;

print "<br>";   
function calculate($v1, $v2, $action="+"){
    if($action == "add" || $action == "+"){
        return $v1+$v2;
    }
    else if($action == "sub" || $action == "-"){
        return $v1-$v2;
    }
    else{
        return "wrong input";
    }
}

echo calculate(30,20, "-");