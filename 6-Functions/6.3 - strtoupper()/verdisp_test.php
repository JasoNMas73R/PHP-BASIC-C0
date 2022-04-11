<title>verdisp_test.php</title>

<?php


function sommetje() {
    echo 1 + 1;
}

function toonVersieEnz(){
    echo "Dit is <i>PHP</i> <b>v".phpversion();
    echo "</b>.<br>";
    echo "Één plus één is: <b>"; //.sommetje()."</b>."; wil niet goed werken als ik het zo aan elkaar zet
    sommetje();
    echo "</b>.";
}

toonVersieEnz();


?>