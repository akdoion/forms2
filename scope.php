<?php
$a =98; //global variable
$b = 5;
function printValue(){
    // $a = 97; //local variable
    global $a, $b; //give me the accesss to this global variable
    $a = 99;
    $b = 52;
    echo "The value of your variable is $a, $b";
    echo "<br>";
    echo var_dump($GLOBALS["a"]);
    echo var_dump($GLOBALS["b"]);

}

//echo $a; 
printValue();
?>

