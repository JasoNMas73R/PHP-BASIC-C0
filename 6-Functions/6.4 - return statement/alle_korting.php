<!DOCTYPE html>
<html>
<body>
    <title>alle_korting.php</title>

<?php


function ProcentKorting($korting) {
    $koopPrijsOrig = 85;
    return $koopPrijsNew = round(((100 - $korting) / 100) * $koopPrijsOrig, 2)." euro."; // source: https://stackoverflow.com/questions/1864291/subtracting-a-percentage-from-a-value-in-php
}                    // round() rond een getal af of de uitkomst van een som in dit geval. het nummer achter de komma is hoeveel nummers achter de decimaal mogen staan

echo "Het totaal bedrag is ";
echo ProcentKorting(15); // getal tussen de haakjes geeft aan welke waarde wij $koring moeten geven


?>

</body>
</html> 