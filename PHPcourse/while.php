<?php

$secret = "magic";
$attempts = 0;
$maxAttempts = 5;

while($attempts < $maxAttempts){
    echo "Guess the password: ";
    $guess = trim(fgets(STDIN));
    $attempts++;

    if ($guess == $secret){
        echo "congrats";
        break;
    }
    elseif ($attempts >= $maxAttempts){
        echo "out of range";
    }
    else{
        echo "wrong answer \n attempts left: ". ($maxAttempts - $attempts) ."\n";
    }
}