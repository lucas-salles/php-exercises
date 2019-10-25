<?php
    require_once('../vendor/autoload.php');
    session_start();
    if (!isset($_SESSION['nomes']))
        $_SESSION['nomes'] = array();
    if (sizeof($_SESSION['nomes']) > 0)
        foreach ($_SESSION['nomes'] as $nome) {
            $index = array_search($nome, $_SESSION['nomes']);
            unset($_SESSION['nomes'][$index]);
        }
    header('location:listar.php');
?>