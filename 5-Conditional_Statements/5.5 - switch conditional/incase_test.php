<title>incase_test.php</title>

<?php

$score = 10;

switch($score) {
    case 10:
        echo "Wow, wat een fantastische score! Max would be proud!";
    break;

    case 9:
        echo "Wow, bijna alle punten! Nog 1 te gaan!";
    break;

    case 8:
        echo "Goed bezig jongens, bijna alle punten!";
    break;

    case 7:
        echo "Ga zo door!";
    break;

    case 6:
        echo "Nou ja, het komt er in ieder geval wel voor de dag ermee.";
    break;

    default:
        echo "Max is matig teleurgesteld in je.";
}


?>