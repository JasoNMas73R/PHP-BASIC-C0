<?php

$coders =  ['torvalds', 'gates', 'wozniak', 'bos'];
asort($coders);

print_r($coders);

//de array $coders is nu:
// ['bos', 'gates', 'torvalds', 'wozniak'];

$coders =  ['torvalds', 'gates', 'wozniak', 'bos'];
arsort($coders);

echo "<br>";
print_r($coders);

//de array $coders is nu:
// [ 'wozniak',  'torvalds',  'gates', 'bos'];

?>