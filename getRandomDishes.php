<?php
// Array of dishes with details
$dishes = [
    ["image" => "gujaratidish.jpg", "name" => "Gujarati Dish", "state" => "Gujarat", "price" => 200],
    ["image" => "Punjabi_dish.jpg", "name" => "Punjabi Dish", "state" => "Punjab", "price" => 250],
    ["image" => "South_indian_dish.jpg", "name" => "South-Indian Dish", "state" => "Tamil Nadu", "price" => 220],
    ["image" => "Rajasthani_dish.jpeg", "name" => "Rajasthani Dish", "state" => "Rajasthan", "price" => 240],
    ["image" => "dal_chawal.jpg", "name" => "Dal-Chawal", "state" => "Uttar Pradesh", "price" => 150],
    ["image" => "Dhokla.jpg", "name" => "Dhokla", "state" => "Gujarat", "price" => 180],
    ["image" => "Burger.jpg", "name" => "Burger", "state" => "Western Cuisine", "price" => 120],
    ["image" => "chole-bhature.jpg", "name" => "Chole Bhature", "state" => "Delhi", "price" => 210],
    ["image" => "Malai-Kofta.jpg", "name" => "Malai Kofta", "state" => "Punjab", "price" => 300],
    ["image" => "Kashmiri-rajma.jpg", "name" => "Kashmiri Rajma", "state" => "Kashmir", "price" => 230],
    ["image" => "rasmalai.jpg", "name" => "Ras Malai", "state" => "West Bengal", "price" => 190],
    ["image" => "Kesar_Sweet.jpg", "name" => "Kesar Sweet", "state" => "Rajasthan", "price" => 250],
];

// Shuffle and get a random subset of dishes (e.g., 5 dishes)
shuffle($dishes);
$randomDishes = array_slice($dishes, 0, 5);

header('Content-Type: application/json');
echo json_encode($randomDishes);
?>
