<!DOCTYPE html>
<html>
<body>
    <title>index.php</title>

<?php


$test1 = 12;
$test2 = 3;

if($test1 == $test2) {
    echo "gelijk";
}
echo "<br>";
if($test1 != $test2) {
    echo "ongelijk";
}
echo "<br>";
if($test1 === $test2) {
    echo "identiek";
}
echo "<br>";
if($test1 > $test2) {
    echo "test1 is groter dan test2";
}
echo "<br>";
if($test1 < $test2) {
    echo "test1 is kleiner dan test2";
}
echo "<br>";
if($test1 >= $test2) {
    echo "test1 is groter of gelijk aan test2";
}
echo "<br>";
if($test1 <= $test2) {
    echo "test1 is kleiner of gelijk aan test2";
}


?>

</body>
</html> 