<?php
    spl_autoload_register(function ($classe) {
        $arquivo = str_replace("\\", "/",$classe);
        if(file_exists("$arquivo.php"))
            require_once("$arquivo.php");
    });
?>