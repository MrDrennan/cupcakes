<?php
/**
 * This website orders cupcakes with a form and displays the order upon reaching
 * the confirmation page. It will display errors to the user if form not filled in
 * correctly.
 *
 * @author  Chad Drennan
 * Date: 1/10/20
 * @link http://cdrennan.greenriverdev.com/328/cupcakes
 */

ini_set("display_errors", 1);
error_reporting(E_ALL);

require('includes/cupcake-functions.inc.php');

$cakeFlavors = [
    "grasshopper" => "The Grasshopper",
    "maple" => "Whiskey Maple Bacon",
    "carrot" => "Carrot Walnut",
    "caramel" => "Salted Caramel Cupcake",
    "velvet" => "Red Velvet",
    "lemon" => "Lemon Drop",
    "tiramisu" => "Tiramisu"
];

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = validateRequiredField('name', $errors);
    $flavors = validateRequiredSelection('flavors', $cakeFlavors, $errors);

    if (empty($errors)) {
        define("CUPCAKE_PRICE", 3.5);
        $total = count($flavors) * CUPCAKE_PRICE;

        include 'confirmation.php';
    }
    else {
        include 'order-form.php';
    }
}
else {
    include "order-form.php";
}

