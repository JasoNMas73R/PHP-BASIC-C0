<!DOCTYPE html>
<html>
<body>
    <title>index.php</title>

<?php




function TienProcentKorting() {
    $koopPrijs = 85;
    $korting = 10;
    return $koopPrijs = round(((100 - $korting) / 100) * $koopPrijs, 2)." euro."; // source: https://stackoverflow.com/questions/1864291/subtracting-a-percentage-from-a-value-in-php
}                    // round() rond een getal af of de uitkomst van een som in dit geval. het nummer achter de komma is hoeveel nummers achter de decimaal mogen staan

echo "Het totaal bedrag is ";
echo TienProcentKorting();


?>

</body>
</html> 