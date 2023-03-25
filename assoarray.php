<?php
//these are called indexed arrays
// $arr = array('this', 'that', 'what');
// echo $arr[0];
// echo "<br>";
// echo $arr[1];
// echo "<br>";
// echo $arr[2];

//Associative array
$favCol = array(
    'shubham' => 'red',
    'rohan' => 'green',
    'harry' => 'blue',
    8 =>'that'
);

// echo $favCol['harry'];
// echo "<br>";
// echo $favCol['rohan'];
// echo "<br>";
// echo $favCol['8'];

foreach ($favCol as $key => $value) {
    echo "Favorite color of $key is $value <br>";
}
?>