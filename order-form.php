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
    <form action="#" method="post">
        <label for="name">Your name:</label>
        <input id="name" name="name" type="text">

        <h2>Cupcake flavors:</h2>

        <ul>
            <?php
            foreach ($cakeOptions as $name => $displayTxt) {
                echo "<li>
                          <input type='checkbox' id='$name' name='$name'>
                          <label for='$name'>$displayTxt</label>
                      </li>";
            }
            ?>
        </ul>

        <button type="submit">Order</button>
    </form>
</main>
</body>
</html>
