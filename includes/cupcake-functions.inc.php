<?php

function validateRequiredField($postKey, &$errors) {
    $value = trim($_POST[$postKey]);

    if (empty($value)) {
        $errors[] = 'req' . ucfirst($postKey);
        return null;
    }
    return $value;
}

function validateRequiredSelection($postKey, $validOptions, &$errors) {
    $hasSelectedOption = false;

    if (isset($_POST[$postKey])) {

        foreach ($_POST[$postKey] as $currOption) {

            // Chose at least 1 valid option
            if (array_key_exists($currOption, $validOptions)) {
                $hasSelectedOption = true;
            }
            else { // Spoofing the form
                $errors[] = 'invalid' . ucfirst($postKey);
                return null;
            }
        }
    }

    // Set error if no option was selected
    if (!$hasSelectedOption) {
        $errors[] = 'req' . ucfirst($postKey);
        return null;
    }
    return $_POST[$postKey];
}

function stickVal($postKey) {
    if (isset($_POST[$postKey])) {
        echo "value='$_POST[$postKey]'";
    }
}

function stickCheck($postKey, $val) {
    if (isset($_POST[$postKey]) && in_array($val, $_POST[$postKey])) {
        return "checked";
    }
    return "";
}

function showError($errorId, $errors) {
    if (in_array($errorId, $errors)) {
        echo "style='display:initial;'";
    }
}
