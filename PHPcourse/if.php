<?php

$x = 10;

if($x >= 4){
    echo "x is " .  $x . "\n";
}

$score = 100;

if($score >= 90){
    if($score == 100){
        echo "A+";
    }
    else{
        echo "A";
    }
}
elseif ($score >= 80){
    echo "B";
}
else {
    echo "F";
}

$num = 16;
if($num % 2 == 0){
    echo "\neven getal";
}
else {
    echo "\noneven getal";
}