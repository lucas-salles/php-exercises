<?php
    session_start();
    if (!isset($_SESSION['logado']))
        header('location:index.html');
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
    <form action="add.php" method="post">
        <label for="nome">Nome do convidado:</label><br>
        <input type="text" name="nome">
        <button type="submit">Add</button>
    </form><br>
    <a href="listar.php">Ver lista</a><br>
    <a href="sair.php">Sair</a>
</body>
</html>