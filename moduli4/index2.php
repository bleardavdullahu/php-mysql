<?php

$sports1 = ["fotball" ,"voleyball" ,"tenis","ping pong","baseball"];

echo $sports1[3];

echo end ($sports1);

echo count ($sports1);

for($count=0; $count<4; $count++){
    echo $sports1[$count]."<hr>";
}


array_push( $sports1,'baseball');

var_dump($sports1);

array_pop($sports1);

var_dump($sports1);

array_unshift($sports1,'tenis');

var_dump($sports1);

array_shift($sports1);

var_dump($sports1);

$numbers=[1,2,3,4,5,6,7,8,9];

$mbledhja = array_sum($numbers);

echo $mbledhja."<hr>";



?>