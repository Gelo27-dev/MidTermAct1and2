<?php 
// Indexed arrays
$productNames = ["Bag", "Note_Books", "Camera", "Headphones", "Laptop", "Smartphone", "Tablet", "Watch"];
$productPrices = [1000, 100, 3000, 200, 45000, 13000, 15000, 5000];

echo "Product Names: " . implode(", ", $productNames) . "<br>";
echo "First product price: ₱" . $productPrices[0] . "<br>";
echo "Last product price: ₱" . $productPrices[count($productPrices) - 1] . "<br><br>";

// Associative array
$productDetail = [
    "name" => "Bag",
    "price" => 1000,
    "brand" => "Shigetsu",
    "inStock" => true,
    "description" => "A stylish and durable bag perfect for everyday use."
];

echo "Product: " . $productDetail["name"] . "<br>";
echo "Brand: " . $productDetail["brand"] . "<br>";
echo "Price: ₱" . $productDetail["price"] . "<br>";
echo "In Stock: " . ($productDetail["inStock"] ? "Yes" : "No") . "<br>";

$productDetail["warranty"] = "2 years";
echo "Warranty: " . $productDetail["warranty"] . "<br><br>";

// Multidimensional Array
$catalog = [
    [
        "name" => "Bag",
        "price" => 1000,
        "brand" => "Shigetsu",
        "inStock" => true
    ],
    [
        "name" => "Note_Books",
        "price" => 100,
        "brand" => "PaperMate",
        "inStock" => true
    ],
    [
        "name" => "Camera",
        "price" => 3000,
        "brand" => "Canon",
        "inStock" => false
    ],
    [
        "name" => "Headphones",
        "price" => 200,
        "brand" => "Sony",
        "inStock" => true
    ],
    [
        "name" => "Laptop",
        "price" => 45000,
        "brand" => "Dell",
        "inStock" => true
    ],
    [
        "name" => "Smartphone",
        "price" => 13000,
        "brand" => "Samsung",
        "inStock" => false
    ],
    [
        "name" => "Tablet",
        "price" => 15000,
        "brand" => "Apple",
        "inStock" => true
    ],
    [
        "name" => "Watch",
        "price" => 5000,
        "brand" => "Fossil",
        "inStock" => true
    ]
];

echo "--- Full Catalog ---<br>";
foreach ($catalog as $product) {
    echo "Product: " . $product["name"] . " - Price: ₱" . number_format($product["price"], 2) . "<br>";
}
?>
