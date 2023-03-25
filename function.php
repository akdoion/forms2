<?php
function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
       
    } 
    return $sum;
    }
    $ak =[98,87,76,65,54,45];
    $sumMarks= processMarks($ak);

    $akanksha = [59,58,57,16,95,94];
    $sumMarksakanksha= processMarks($akanksha);

    echo "Total marks scored by ak out of 600 is $sumMarks <br>";
    echo "Total marks scored by akanksha out of 600 is $sumMarksakanksha";
?>