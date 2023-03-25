<!-- string function in php -->

<?php
$name="akanksha is a good girl";
echo $name;
echo "<br>";

echo "The length of " .  "my string is " . strlen($name);
echo "<br>";

echo str_word_count($name);
echo "<br>";

echo strrev($name);
echo "<br>";

echo strpos($name, "is");
echo "<br>";

echo str_replace("akanksha", "ak", $name);
echo "<br>";

echo str_repeat($name, 5);
echo "<br>";

echo "<pre>";
echo rtrim("   this is good girl   ");
echo "<br>";
echo ltrim("   this is good girl   ");
echo "</pre>";
?>