<?php
// 1.arithmetic 
// 2. assignment
// 3. comparison 
// 4. logical

$a= 25;
$b= 5;

// 1.arithmetic 
echo $a + $b;
echo "<br>";
echo $a - $b;
echo "<br>";
echo $a * $b;
echo "<br>";
echo $a / $b;
echo "<br>";
echo $a % $b;
echo "<br>";
echo $a ** $b;
echo "<br>";

// 2. assignment
// $x=$a;
$a += 5;
echo "for a, the value is ". $a. "<br>";
$a -= 5;
echo "for a, the value is ". $a. "<br>";
$a *= 5;
echo "for a, the value is ". $a. "<br>";
$a /= 5;
echo "for a, the value is ". $a. "<br>";
$a %= 5;
echo "for a, the value is ". $a. "<br>";
$a **= 5;
echo "for a, the value is ". $a. "<br>";

//3. comparisin operator
$x=57;
$y=7;

echo "For x == y, the result is ". var_dump ($x == $y). "<br>";
echo "For x == y, the result is ". var_dump ($x > $y). "<br>";
echo "For x == y, the result is ". var_dump ($x <> $y). "<br>";
echo "For x == y, the result is ". var_dump ($x <=$y). "<br>";
echo "For x == y, the result is ". var_dump ($x >= $y). "<br>";

//4. logical
$m= true;
$n= false;

echo "For m and n, the result is";
echo var_dump($m and $n);
echo "<br>";

echo "For m && n, the result is";
echo var_dump($m && $n);
echo "<br>";

echo "For m or n, the result is";
echo var_dump($m or $n);//or->||
echo "<br>";

echo "For !m, the result is";
echo var_dump(!$m);
echo "<br>";
?>

