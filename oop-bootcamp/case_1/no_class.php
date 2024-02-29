<?php
// Define quantities and prices
$bananas = 6;
$banana_price = 1;
$apples = 3;
$apple_price = 1.5;
$wine_bottles = 2;
$wine_price = 10;

// Calculate total price for each item
$total_banana_price = $bananas * $banana_price;
$total_apple_price = $apples * $apple_price;
$total_wine_price = $wine_bottles * $wine_price;

// Calculate total price
$total_price = $total_banana_price + $total_apple_price + $total_wine_price;

// Define tax rates
$fruit_tax_rate = 0.06;
$wine_tax_rate = 0.21;

// Calculate tax for each item
$banana_tax = $total_banana_price * $fruit_tax_rate;
$apple_tax = $total_apple_price * $fruit_tax_rate;
$wine_tax = $total_wine_price * $wine_tax_rate;

// Calculate total tax
$total_tax = $banana_tax + $apple_tax + $wine_tax;
$TTC = $total_price + $total_tax;

echo "Total price: €" . $total_price . "<br>";
echo "TVA : €" . $total_tax . "<br>";
echo "TTC : €" . $TTC . "<br>";
?>