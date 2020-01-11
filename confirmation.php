<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <title>Cupcake Fundraiser</title>
</head>
<body>
<header>
    <h1>Cupcake Fundraiser</h1>
</header>
<main>
    <?php

    echo "<h2>Thank you, $name, for your order!</h2>
          <p>Order Summary:</p>
          <ul>";
            foreach ($flavors as $currFlavor) {
                echo "<li>$cakeFlavors[$currFlavor]</li>";
            }
    echo "</ul>
          <p>Order Total: $" . number_format($total, 2) . "</p>";
    ?>
</main>
</body>
</html>
