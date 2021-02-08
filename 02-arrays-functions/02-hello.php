<?php

// Update hello so that it returns the string "hello name".

require __DIR__ . "/vendor/autoload.php";

function hello($name) {
    return "hello {$name}";
};

dump(hello("alice")); // "hello alice"
dump(hello("bob")); // "hello bob"