<?php
    session_start();
    if (!isset($_SESSION['nomes']))
        $_SESSION['nomes'] = array();
    array_push($_SESSION['nomes'], $_POST['nome']);
    header('location:home.php');
?>