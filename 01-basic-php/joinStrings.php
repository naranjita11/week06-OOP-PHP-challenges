<?php

require __DIR__ . "/vendor/autoload.php";

$string1 = "I";
$string2 = "like";
$string3 = "to";
$string4 = "boogie";
$string5 = "boogie";

// concatenation
// $joined = $string1 . " " . $string2 . " " . $string3 . " " .$string4 . " " . $string5;

// interpolation
$joined = "{$string1} {$string2} {$string3} {$string4} {$string5}";

dump($joined); // "I like to boogie boogie"