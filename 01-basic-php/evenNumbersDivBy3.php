<?php

// Write some code that outputs any even numbers between 1 and 50 that are also divisible by 3

require __DIR__ . "/vendor/autoload.php";

for ($i = 2; $i <= 50; $i += 2) {

    if ($i%3 == 0) {
        dump($i);
    }
    
}