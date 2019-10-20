<?php
    if (!isset($_COOKIE['voto'])) {
        setcookie('voto', $_POST['voto']);
        echo "Você votou $_POST[voto].";
    }
    else
        echo "Você já votou";
?>