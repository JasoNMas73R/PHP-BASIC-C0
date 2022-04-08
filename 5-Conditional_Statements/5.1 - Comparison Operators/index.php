<!DOCTYPE html>
<html>
<body>
    <title>index.php</title>

<?php


$test1 = 121;
$test2 = "Happy day!";

var_dump($test1 == $test2);  // links is gelijk aan rechts
echo "<br>";
var_dump($test1 === $test2); // links is identiek aan rechts (zelfde waarde en zelfde datatype)
echo "<br>";
var_dump($test1 != $test2);  // links is ongelijk aan rechts
echo "<br>";
var_dump($test1 > $test2);   // links is groter dan rechts
echo "<br>";
var_dump($test1 < $test2);   // links is kleiner dan rechts
echo "<br>";
var_dump($test1 <> $test2);  // links is ongelijk aan rechts
echo "<br>";
var_dump($test1 >= $test2);  // links is groter of gelijk aan rechts
echo "<br>";
var_dump($test1 <= $test2);  // links is kleiner of gelijk aan rechts


?>

</body>
</html>