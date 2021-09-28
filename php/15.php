<?php

print "<pre>";

print "Post";
print_r($_POST);

print "Files";
print_r($_FILES);

$im = extract($_FILES['im']);

$path = "images/";
$id = rand(0,9999);
$name = $id."-".$name;
$fullpath = $path.$name;

// copy($_FILES['im']['tmp_name'], "images/".$_FILES['im']['name']);

if($error == 0){
    if($type == "image/jpeg" || $type == "image/png" || $type == "image/jpg"){
        copy($tmp_name, $fullpath);
    }else{
        die("wrong format");
    }
}else{
    die("error upload file");
}