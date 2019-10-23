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
    <?php
        if (!isset($_SESSION['nomes']))
            echo 'Lista vazia';
        else {
            echo 'Convidados:';
            foreach ($_SESSION['nomes'] as $nome) {
                echo "$nome<br>";
            }
        }
    ?>
    <a href="home.php">Voltar</a><br>
    <a href="sair.php">Sair</a>
</body>
</html>
