<title>komeruit_test.php</title>

<?php


$var1 = 68
;

if($var1 < 10 && $var1 > 5) {           // betekent dat hij aan beide voorwaarden moet voldoen
    echo "het getal zit tussen de 10 en de 5!";
}
elseif($var1 <= 0) {
    echo "koud hè?";
}
elseif($var1 < 5) {
    echo "het getal is kleiner dan 5!";
}
elseif($var1 > 10 && $var1 == 69) {     // <-------
    echo "haha grappig";                // deze eerst checken omdat
}                                       // hij anders de check op 69
elseif($var1 > 10) {                    // skipt omdat groter dan 10
    echo "het getal is groter dan 10!"; // al true is en de computer
}                                       // de taak al als gedaan ziet


?>