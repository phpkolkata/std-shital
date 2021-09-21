<?php
// multidiamensional array
$m = array('m','n','o');
$y = array('y','z', $m);
$a = array('a','b','c','d',$y);

// print "<pre>";
// print_r($a);

// echo $a[1];//b

// echo $a[4][1];

// echo $a[4][2][0];

foreach($a as $v){
    if(!is_array($v)){
        echo $v."<br>";
    }
    else{
        foreach($v as $v1){
            if(!is_array($v1)){
                echo $v1."<br>";
            }
            else{
                foreach($v1 as $v2){
                    echo $v2."<br>";
                }
            }
        }
    }
}