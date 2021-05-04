<?php

$input = "
gaga
    s
gas";
$save = "gaga
s s
gas";
//1: $ids = explode(PHP_EOL, $input);
// put text lines in array
$output = explode("\n", str_replace("\r", "", $input));
$save = explode("\n", str_replace("\r", "", $save));
// remove empty entrys
$output = array_filter($output);
$save = array_filter($save);
// reoder array
$output = array_values($output);
$save = array_values($save);
foreach($output as $key=>$value) {
    $valueWithoutSpace = strtolower(str_replace(' ', '', $value));
    $saveWithoutSpace = strtolower(str_replace(' ', '', $save[$key]));
   
    echo " line " .$key . " = " . strcmp($valueWithoutSpace,$saveWithoutSpace);
}