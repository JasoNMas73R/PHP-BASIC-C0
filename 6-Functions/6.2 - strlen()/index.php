<!DOCTYPE html>
<html>
    <body>
        <title>index.php</title>

<?php


$voornaam = "Jason";
$achternaam = "Boon";
$geheleNaam = "Mijn naam is $voornaam $achternaam.";

function mijnNaamGROOT($geheel) { // een nieuwe variabel tussen haakjes zetten houdt in dat als je de functie oproept met een andere variabel tussen de haakjes dat de gebruikte variabel bij de call gelijk staat aan de nieuwe variabel geïntroduceerd in de functie.
    echo strtoupper($geheel);
}

mijnNaamGROOT($geheleNaam); // $geheleNaamGROOT staat in deze call alleen gelijk aan $gehaal in de functie


?>

    </body>
</html>