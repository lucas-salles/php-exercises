<?php
    session_start();
    if(!isset($_SESSION['auth']) || $_SESSION['auth'] === false)
        header('Location: index.html');
    require_once('crudpessoa.php');

    $test = new CrudPessoa();
    $array = $test->readAll();
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
    <?php
        for ($i=0; $i < sizeof($array); $i++) { 
            print_r($array[$i]);
            echo '<br>';
        }
    ?>
    <a href="home.php">Voltar</a>
</body>
</html>
    