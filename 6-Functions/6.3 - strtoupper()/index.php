<!DOCTYPE html>
<html>
<body>
    <title>index.php</title>

<?php


$deZin = "I'm gonna you with my red hot car";  // squarepusher - my red hot car,
                                               // mocht je denken waar slaat dit op
function telAlleKarakters($char_data) {
    $lengteRegel = strlen($char_data);
    echo $lengteRegel;
}

echo "De zin is <i>$deZin</i>.<br>";
echo "Hij bevat <b>";
telAlleKarakters($deZin); // ja, ja, geen 40 maar ik snap de boel wel. da's toch genoeg?
echo "</b> tekens.";


?>

</body>
</html> 