<?php
$p_22 = array("name"=>"raj", "age"=>12);
$a_22 = array("class"=>"5", "sec"=>"b");

$p_35 = array("name"=>"suman", "age"=>13);
$a_35 = array("class"=>"6", "sec"=>"a");

$roll_22 = array("personal"=>$p_22, "academeic"=>$a_22);
$roll_35 = array("personal"=>$p_35, "academeic"=>$a_35);

$std = array("22"=>$roll_22, "35"=>$roll_35);

// print "<pre>";
// print_r($std);

foreach($std as $k=>$v){
    print "<h1>Roll:$k</h1>";
    foreach($v as $k1=>$v1){
        print"<b>$k1:</b><br>";
        foreach($v1 as $k2=>$v2){
            print "$k2-$v2<br>";
        }
    }
}