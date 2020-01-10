<?php
ini_set("display_errors");
error_reporting(E_ALL);

$cakeOptions = [
    "grasshopper" => "The Grasshopper",
    "maple" => "Whiskey Maple Bacon",
    "carrot" => "Carrot Walnut",
    "caramel" => "Salted Caramel Cupcake",
    "velvet" => "Red Velvet",
    "lemon" => "Lemon Drop",
    "tiramisu" => "Tiramisu"
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];

    $name = trim($_POST['name']);

    if (empty($name)) {
        $errors[] = "reqName";
    }

    if (empty($errors)) {
        include 'confirmation.php';
    }
    else {
        include 'order-form.php';
    }
}
else {
    include "order-form.php";
}

