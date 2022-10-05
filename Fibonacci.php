<?php
//KYLE T. FABICON

function Fibo($input){
    if ($input == 0) return 0; //first number
    else if ($input == 1) return 1;  //second number
    else return (Fibo($input-1) + Fibo($input-2));
}


//get user input
$input = readline('Input integer from 1 - 20: ');
while($input>20 || $input<1){
    $input = readline('Invalid input, input integer from 1 - 20: ');
}

for ($i = 0; $i < $input; $i++){//loop from 0 to inputted number and print corresponding fibonacci value
    echo Fibo($i);
    if($i < $input-1) echo ', ';
}
