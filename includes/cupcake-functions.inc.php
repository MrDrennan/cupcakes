<?php

function validateRequiredField($name, &$errors) {
    $value = trim($_POST[$name]);

    if (empty($value)) {
        $errors[] = 'req' . ucfirst($name);
        return null;
    }
    return $value;
}

function validateRequiredSelection($options, &$errors) {
    foreach ($options as $name => $displayText) {
        if (isset($_POST[$name])) {
            return;
        }
    }
    $errors[] = 'reqOption';
}
