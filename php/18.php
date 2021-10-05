<?php

setcookie("myname", "raj");
// setcookie("myage", "12",time()+10);

echo $_COOKIE['myname'];
echo $_COOKIE['myage'];


print '<pre>';
print_r($_SERVER);