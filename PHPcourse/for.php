<?php
echo "count down\n";

// 1ste expressie wordt maar 1 x uitgevoerd aan het begin
//3e expressie wordt altijd aan het einde gerund van een loop ronde
// 2e is de conditie voor het runnen van de loop
//      1e      2e      3e
for ($i = 10; $i >= 0; $i--){
    echo $i . "\n";
    sleep(1);
    if($i == 0){
        echo "Lift off!";
    }
}