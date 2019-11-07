<?php
    session_start();
    if(!isset($_SESSION['auth']) || $_SESSION['auth'] === false)
        header('Location: index.html');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
    <title>Document</title>
</head>
<body>
    <h1>Home</h1>

    <h2>Adicionar</h2>
    <form action="create.php" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" placeholder="nome"><br>
        <label for="address">Address:</label><br>
        <input type="text" name="address" placeholder="address"><br>
        <input type="submit" value="Adicionar">
    </form>

    <h2>Alterar</h2>
    <form action="update.php" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" placeholder="nome"><br>
        <label for="address">Address:</label><br>
        <input type="text" name="address" placeholder="address"><br>
        <label for="id">id:</label><br>
        <input type="text" name="id" placeholder="id"><br>
        <input type="submit" value="Alterar">
    </form>

    <h2>Deletar</h2>
    <form action="delete.php" method="post">
        <label for="id">id:</label><br>
        <input type="text" name="id" placeholder="id">
        <input type="submit" value="Deletar">
    </form>
    <a href="read.php" class="btn btn-outline-secondary">Ver todos</a><br>
    <a href="logout.php" class="btn btn-primary">logout</a>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>