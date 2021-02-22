<?php

$strings = "strings";
$morestrings = 'strings';

$int = 343422;

$bool = true;
$anotherbool = false;

$floats = -45.0035;

$arrays = array("apple", "banana", "plum");

$objects = new stdClass();

//---


echo "This will output on the screen";

echo "\n"; # new line

echo "I have " . $int . " cats"; # concatenation

echo "\n";

echo sprintf("I have %d cats", $int); # formatted strings

echo "\n";

echo "The title of my book is \"banana\""; # escaped strings

echo "\n";

echo 'The title of my book is "banana"';

echo "\n";

$div = 250/25;

echo $div;

echo "\n";

$add = 250+25;

echo $add;

echo "\n";

$sub = 250-250;

echo $sub;

echo "\n";

$multiply = 250*2;

echo $multiply;

echo "\n";

$exp = pow(2, 3);

echo $exp;

echo "\n";

$denom = 64;
$numer = 8;

echo $numer/$denom;

echo "\n";



?>