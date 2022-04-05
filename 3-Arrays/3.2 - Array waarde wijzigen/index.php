<!DOCTYPE html>
<html>
<body>

<?php


$myDogNames = array('Fido Castro', 'Ludovic', 'Sebastian', 'Odie');

echo "$myDogNames[0], ";
echo "$myDogNames[1], ";
echo "$myDogNames[2], ";
echo "$myDogNames[3]. ";

$myDogNames[3] = 'Albert';
// $myDogNames[3] = $myDogNames[2];

echo "<br><br> $myDogNames[3], ";
echo "$myDogNames[0], ";
echo "$myDogNames[1], ";
echo "$myDogNames[2]. ";


?>

</body>
</html> 