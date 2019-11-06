<?php
    session_start();
    if(!isset($_SESSION['auth']) || $_SESSION['auth'] === false)
        header('Location: index.html');
    require_once('crudpessoa.php');

    $id = $_POST['id'];
    $test = new CrudPessoa();
    $test->delete($id);
    header('location:home.php');
?>