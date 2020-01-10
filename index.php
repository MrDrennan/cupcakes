<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

require('includes/cupcake-functions.inc.php');

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

    $name = validateRequiredField('name', $errors);

    validateRequiredSelection($cakeOptions, $errors);


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

