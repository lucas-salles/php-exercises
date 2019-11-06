<?php
    session_start();
    if(!isset($_SESSION['auth']) || $_SESSION['auth'] === false)
        header('Location: index.html');
    require_once('crudpessoa.php');

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $test = new CrudPessoa();
    $test->create($nome, $cpf);
    header('location: home.php');
?>