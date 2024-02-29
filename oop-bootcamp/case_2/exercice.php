<?php
class Product {
    // Properties of the product
    public $name;
    public $quantity;
    public $price;
    public $category;

    // Constants for discounts and tax rates
    const FRUIT_DISCOUNT = 0.5;
    const TAX_RATE_6 = 0.06;
    const TAX_RATE_21 = 0.21;

    // Constructor to initialize the product
    public function __construct($name, $quantity, $price, $category) {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->category = $category;
    }

    // Calculate the total price of the product(s)
    public function totalPrice() {
        return $this->quantity * $this->discountedPrice();
    }

    // Calculate the total tax on the product(s)
    public function totalTax() {
        return $this->totalPrice() * $this->getTaxRate();
    }

    // Calculate the discounted price based on the product category
    private function discountedPrice() {
        if ($this->category == 'fruit') {
            return $this->price * (1 - self::FRUIT_DISCOUNT);
        } else {
            return $this->price;
        }
    }

    // Get the appropriate tax rate based on the product category
    private function getTaxRate() {
        if ($this->category == 'fruit') {
            return self::TAX_RATE_6;
        } else if ($this->category == 'wine') {
            return self::TAX_RATE_21;
        } else {
            return 0;
        }
    }
}

// Create instances of the Product class for different items
$bananas = new Product("Bananas", 6, 1, 'fruit');
$apples = new Product("Apples", 3, 1.5, 'fruit');
$wine = new Product("Wine", 2, 10, 'wine');

// Calculate total price and total tax for all items
$total_price = $bananas->totalPrice() + $apples->totalPrice() + $wine->totalPrice();
$total_tax = $bananas->totalTax() + $apples->totalTax() + $wine->totalTax();

// Display the results
echo "Total price: €" . $total_price . "<br>";
echo "Total tax: €" . $total_tax . "<br>";
echo "Total price including tax: €" . ($total_price + $total_tax) . "<br>";
?>
