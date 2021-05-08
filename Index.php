<?php
$arr=[123,22,44,23,1,4,55,42];
$min = $arr[0];
for($i=1;$i<count($arr);$i++){
    if($min>$arr[$i]){
        $min = $arr[$i];
    }
} echo $min;
