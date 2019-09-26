<?php
    $name = 'Lucas';
    $items = 10;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello World!</h1>
    <p>Olá <?php echo $name ?></p>
    <ul>
        <?php foreach (range(1, $items) as $item): ?>
        <li>Item <?php echo $item ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>