<!DOCTYPE html>
<html>
<body>
    <title>kluis.php</title>

<?php


$getal01 = 409; //  457
$getal02 = 289; //  321

if($getal01 == 457  xor $getal02 == 321) { // houdt in dat een van de beide waar zijn maar niet allebei of geen van beide
    echo "*klik*";
}
// ik wou dit ook erin verwerken jongens maar ik kan niet op een
// voorbeeld komen ik hoop dat dit alsjeblieft goed is zonder ||
// want ik snap het wel hoor
// elseif($getal01 == 457 || $getal02 == 321) { // houdt in dat een of beide waar zijn
//     echo "*klik* *klik*";
// 
// }
elseif($getal01 == 457 && $getal02 == 321) { // houdt in dat beide waar zijn
        // echo "*klik* *klik*<br>";
        echo "Dit is de juiste combinatie, verdomme je hebt de kluis gekraakt";
    }
else {
    echo "*stilte*";
}
// wat ik eigenlijk wou doen: (zag ook iets op de site van php zelf)
// elseif(! $getal01 == 457 && ! $getal02 == 321) { // alleen als het niet waar is
    // echo "*stilte*";
// }


?>

</body>
</html> 