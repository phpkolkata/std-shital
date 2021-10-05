<?php

// mkdir("abc"); //creates directory
// rmdir("abc"); // removes directory
// unlink('filename.jpg'); // physically deletes file
// chmod("fiename", 0777); // change file permission


// $fp = fopen("db.txt", "a"); // w, a, r
// $str = "hello india";
// fwrite($fp, $str);
// fclose($fp);

// $x = 10;
// $x = 20;
// echo $x;


$fp = fopen("db.txt", "r");

$str = "";
while(!feof($fp)){
    // echo fgets($fp);
    $str.= fgets($fp);
}
fclose($fp);

echo $str;