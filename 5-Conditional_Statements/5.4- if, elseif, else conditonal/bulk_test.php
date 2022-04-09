<title>the price is rice</title>

<?php


$prod_besteld = 10;

if($prod_besteld < 10) {
    $prijs = 1.50;
}
elseif($prod_besteld < 20) {
    $prijs = 1.25;
}
else {
    $prijs = 1.00;
}


if($prod_besteld <= 0) {
    echo "The price is rice";
}
else {
    echo "The price is €".$prijs." per unit.";
}


?>