<?php
$arr = array('name'=>'raj', 'age'=>12, 'class'=>4);
// rand(111,999);

// $rand = array_rand($arr);

// $name = $arr['name'];
// $age = $arr['age'];
// $class = $arr['class'];

extract($arr);

echo $name;
echo $age;
echo $class;