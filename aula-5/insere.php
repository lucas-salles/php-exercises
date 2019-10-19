<?php
    if (!isset($_COOKIE['nomes']))
        setcookie('nomes', $_POST['nome']);
    else
        setcookie('nomes', $_COOKIE['nomes'] . ', ' . $_POST['nome']);
    echo "$_POST[nome] foi add!";
?>