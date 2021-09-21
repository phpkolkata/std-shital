<?php
// associative array
$arr = array('name'=>'raj', 'age'=>12, 'class'=>4);

echo " hello $arr[name], your age is $arr[age]";
echo " hello ". $arr['name'].", your age is ".$arr['age']."<br>";

foreach($arr as $v){
    echo $v."<br>";
}

foreach($arr as $k=>$v){
    echo $k.'-'.$v."<br>";
}
