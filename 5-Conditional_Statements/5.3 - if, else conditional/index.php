<!DOCTYPE html>
<html>
<body>
    <title>interview.php</title>

<?php


$test1 = 5;
$test2 = 7;

echo "<h1>Wij gaan hier wat feiten op tafel leggen. Dit doen we door achter de schermen de computer het vuile werk te laten doen.</h1> <br>";
echo "<i>De getallen die wij vandaag gebruiken zijn </i>".$test1."<i> en </i>".$test2."<i>. </i>"; // geen idee waarom het hier wel werkt en niet bij die andere opdrachten
echo '<i>De getallen gebruiken achter de schermen in volgorde variabelen </i>$test1<i> en </i>$test2<i>.</i><br><br>';
echo "<b>Staan </b>".$test1."<b> en </b>".$test2."<b> gelijk aan elkaar?</b> <br>";

if($test1 == $test2) {
    echo "<i>Ja, die staan wel gelijk aan elkaar.</i><br>";
}
else {
    echo "<i>Nee, zij staan niet gelijk aan elkaar.</i><br>";
}

echo "<b>Oké, maar zijn ze ongelijk van elkaar?</b><br>";

if($test1 != $test2) {
    echo "<i>Uh ja, ze zijn inderdaad ongelijk van elkaar.</i><br>";
}
else {
    echo "<i>Nee, dat zijn ze niet.</i><br>";
}

echo '<b>Goed om te weten. Zijn </b>$test1<b> en </b>$test2<b> dezelfde soort variabelen én staan ze gelijk aan elkaar?</b><br>';

if($test1 === $test2) {
    echo "<i>Yep, dat zijn ze zeker.</i><br>";
}
else {
    echo "<i>Ah nee, dat dan weer niet.</i><br>";
}

echo "<b>Juist. Is </b>".$test1."<b> groter dan </b>".$test2."<b>?</b><br>";

if($test1 > $test2) {
    echo "<i>Jazekers.</i><br>";
}
else {
    echo "<i>Nope.</i><br>";
}

echo "<b>Is het dan kleiner dan </b>".$test2."<b>?</b><br>";

if($test1 < $test2) {
    echo "<i>Ja duh!</i><br>";
}
else {
    echo "<i>Natuurlijk niet!</i><br>";
}

echo "<b>Oh oké dan. Is het misschien dan groter dan of gelijk aan </b>".$test2."<b>?</b><br>";

if($test1 >= $test2) {
    echo "<i>Dat klopt inderdaad.</i><br>";
}
else {
    echo "<i>Helaas niet.</i><br>";
}

echo "<b>Goed om te weten. Dan wou ik alleen nog weten of </b>".$test1."<b> kleiner is of gelijk is aan </b>".$test2."<b>.</b><br>";

if($test1 <= $test2) {
    echo "<i>Uh ja, dat wel.</i><br>";
}
else {
    echo "<i>Nee, nee, dat zeker niet.</i><br>";
}

echo "<b>Bedankt voor dit interview. Ik wens je nog een fijne avond.</b><br>";
echo "<i>Ja is goed, jij ook.</i>";


?>

</body>
</html> 