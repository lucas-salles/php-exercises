<?php
    session_start();
    if(!isset($_SESSION['auth']) || $_SESSION['auth'] === false)
        header('Location: index.html');
    require_once('crudpessoa.php');

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $id = $_POST['id'];
    $test = new CrudPessoa();
    $test->update($nome, $cpf, $id);
    header('location:home.php');
?>