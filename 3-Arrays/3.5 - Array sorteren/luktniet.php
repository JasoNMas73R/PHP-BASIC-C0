<!DOCTYPE html>
<html>
<body>

<?php


$getallen = array(576,445,687,1,46,21,42);
$laag_hoog = asort($getallen);
$hoog_laag = arsort($getallen);

echo "Dit zijn de getallen zoals ik ze kreeg: <br>";
print_r($getallen);
echo "<br><br>";
echo "Dit zijn de getallen van laag naar hoog: <br>";
print_r($laag_hoog);
echo "<br><br>";
echo "Dit zijn de getallen van hoog naar laag: <br>";
echo $laag_hoog;


?>

</body>
</html> 