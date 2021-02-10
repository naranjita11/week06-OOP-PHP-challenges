<?php

require __DIR__ . "/vendor/autoload.php";

class Validator
{
    private $email;
    private $postcode;

    public function email($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) === $email;
    }

    // generally one would use a parser to do this instead of a complex regex. This is about as complex as a regex should get. This one is courtesy of Georgia!
    public function postcode($postcode)
    {
        return preg_match("/^[A-Z][A-Z0-9]{2,3} [0-9][A-Z]{2}$/", $postcode) ===1;
    }
    
}

$validator = new Validator();

// it validates email addresses
echo "Email\n";
dump($validator->email("alfonso@example.com")); // true
dump($validator->email("wombat+12@spoons.plumbing")); // true
dump($validator->email("blah blah blah! alfonso@example.com")); // false
dump($validator->email("wombat@spoonsplumbing")); // false
dump($validator->email("wombatspoons")); // false
dump($validator->email("@wombatspoons")); // false

// it validates postcodes
echo "\nPostcode\n";
dump($validator->postcode("BS4 3UH")); // true
dump($validator->postcode("S10 4GR")); // true
dump($validator->postcode("BS14 9DI")); // true
dump($validator->postcode("SW1A 1AA")); // true
dump($validator->postcode("12B DI9")); // false
dump($validator->postcode("EST4 DD29")); // false
dump($validator->postcode("blah blah BS5 8RJ blah blah")); // false

