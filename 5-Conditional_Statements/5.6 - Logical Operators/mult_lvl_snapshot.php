<!DOCTYPE html>
<html>
<body>
    <title>mult_lvl_snapshot.php</title>

<?php


$getal01 = 457; // 409 
$getal02 = 289; //  321

if($getal01 == 457  xor $getal02 == 321) {
    echo "*klik*";
}
elseif($getal01 == 457 || $getal02 == 321) {

    if($getal01 == 457 && $getal02 == 321) {
        // echo "*klik* *klik*<br>";
        echo "Dit is de juiste combinatie, verdomme je hebt de kluis gekraakt";
    }
    else {
        echo "*klik* *klik*";
    }

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