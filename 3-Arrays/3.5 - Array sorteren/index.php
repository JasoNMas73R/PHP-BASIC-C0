<!DOCTYPE html>
<html>
<body>
    <title>index.php [WIP]</title>

<?php


// ik kreeg hulp van onze ouwe makker Ouke, super top allemaal
$getallen = array(576,445,687,1,46,21,42);



echo "Dit zijn de getallen zoals ik ze kreeg: <br>";
print_r($getallen); // print nu de originele volgorde
echo "<br><br>";

$laag_hoog = $getallen; // dit houdt in dat de inhoud van $getallen wordt gecopy-paste naar $laag_hoog. $getallen wordt met rust gelaten en dit is dus de enigste manier in PHP hoe je een variabel origineel kan houden na sorteren door er een kopie van te maken
asort($laag_hoog); // sorteert het van laag naar hoog

echo "Dit zijn de getallen van laag naar hoog: <br>";
print_r($laag_hoog);
echo "<br><br>";

$hoog_laag = $getallen; // kopieert inhoud $getallen naar $hoog_laag
arsort($hoog_laag); // sorteert het van hoog naar laag

echo "Dit zijn de getallen van hoog naar laag: <br>";
print_r($hoog_laag);
echo "<br><br>";
echo "Even ter herinnering, dit was de originele volgorde: <br>";
print_r($getallen); //zie je? niks verandert aan $getallen omdat we klooien met de gekopieerde variabelen


?>

</body>
</html> 