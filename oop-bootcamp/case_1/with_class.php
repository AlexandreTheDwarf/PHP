<?php
class Product {
    public $name;
    public $quantity;
    public $price;
    public $taxRate;

    public function __construct($name, $quantity, $price, $taxRate) {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->taxRate = $taxRate;
    }

    public function totalPrice() {
        return $this->quantity * $this->price;
    }

    public function totalTax() {
        return $this->totalPrice() * $this->taxRate;
    }
}

$bananas = new Product("Bananas", 6, 1, 0.06);
$apples = new Product("Apples", 3, 1.5, 0.06);
$wine = new Product("Wine", 2, 10, 0.21);

$total_price = $bananas->totalPrice() + $apples->totalPrice() + $wine->totalPrice();
$total_tax = $bananas->totalTax() + $apples->totalTax() + $wine->totalTax();

echo "Total price: €" . $total_price . "<br>";
echo "Total tax: €" . $total_tax . "<br>";
echo "Total price including tax: €" . ($total_price + $total_tax) . "<br>";
?>