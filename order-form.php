<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cupcake-form.css">
    <title>Cupcake Fundraiser</title>
</head>
<body>
<header>
    <h1>Cupcake Fundraiser</h1>
    <hr>
</header>
<main>
    <form action="#" method="post">
        <label for="name">Your name*:</label>
        <input id="name" name="name" type="text" <?php stickVal('name'); ?>>
        <span class="err" id="err-required-name" <?php showError('reqName', $errors); ?>>
            Must enter your name
        </span>

        <p>Cupcake flavors*:</p>
        <ul>
            <?php
            foreach ($cakeFlavors as $name => $displayTxt) {
                $stickCheck = stickCheck('flavors', $name);

                echo "<li>
                          <input type='checkbox' id='$name' name='flavors[]' value='$name' $stickCheck>
                          <label for='$name'>$displayTxt</label>
                      </li>";
            }
            ?>
        </ul>

        <span class="err" id="err-required-flavor" <?php showError('reqFlavors', $errors); ?>>
            Must choose at least 1 type of cupcake
        </span>

        <button type="submit">Order</button>
    </form>
</main>
</body>
</html>
