<?php

// Create a class BasketItem in the App\Shopping namespace. It should take a type and price in the constructor. It should have type(), price(), and priceFormatted() methods. Put the following in index.php and then check that you get back the right results:

// Hint: PHP has a number_format function

namespace App\Shopping;

class BasketItem
{
    private $type;
    private $price;

    public function __construct($typeArg, $priceArg)
    {
        $this->type = $typeArg;
        $this->price = $priceArg;
    }

    public function type()
    {
        return $this->type;
    }

    public function price()
    {
        return $this->price;
    }

    public function priceFormatted()
    {
        $formattedPr = number_format($this->price, 2, '.', '');
        return "£{$formattedPr}";
    }


}