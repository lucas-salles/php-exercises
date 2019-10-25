<?php
    require_once('../vendor/autoload.php');
    session_start();
    if (!isset($_SESSION['nomes']))
        $_SESSION['nomes'] = array();
    $c = new App\Modelo\Convidado($_POST['nome']);
    array_push($_SESSION['nomes'], $c);
    header('location:home.php');
?>