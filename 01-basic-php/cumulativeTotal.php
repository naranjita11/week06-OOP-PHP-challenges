<?php

// Write some code that outputs a cumulative total for each integer between 1 and 50.

require __DIR__ . "/vendor/autoload.php";

for ($i = 1; $i <= 50; $i += 1) {

    $total += $i;
    
    dump($total);
}