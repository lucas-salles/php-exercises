<?php
    spl_autoload_register(function ($classe) {
        if(file_exists("$classe.php"))
            require_once("$classe.php");
    });

    spl_autoload_register(function ($classe) {
        if(file_exists("bicho/$classe.php"))
            require_once("bicho/$classe.php");
    });

    spl_autoload_register(function ($classe) {
        if(file_exists("caracteristicas/$classe.php"))
            require_once("caracteristicas/$classe.php");
    });
?>