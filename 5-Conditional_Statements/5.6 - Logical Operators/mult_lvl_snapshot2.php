<!DOCTYPE html>
<html>
<body>
    <title>mult_lvl_snapshot2.php</title>

<?php


$getal01 = 457; // 409 
$getal02 = 321; // 289 
$deur = "dicht";

if($deur = "open") {
    
    if($getal01 == 457 && $getal02 == 321) {
        echo "De buit is er al uit";
    }
    else {
        echo "";
    }
}
elseif($getal01 == 457  xor $getal02 == 321) {
    echo "*klik*";
}
elseif($getal01 == 457 && $getal02 == 321) {
    // echo "*klik* *klik*<br>";
    echo "Dit is de juiste combinatie, verdomme je hebt de kluis gekraakt";
}
elseif($getal01 == 457 || $getal02 == 321) {
    echo "*klik* *klik*<br>";

}
else {
    echo "*stilte*";
}
// wat ik eigenlijk wou doen: (zag ook iets op de site van php zelf)
// elseif(! $getal01 == 457 && ! $getal02 == 321) {
    // echo "*stilte*";
// }


?>

</body>
</html> 