<?php
    echo "Nome: $_POST[nome]";
    echo "<br> Sexo: $_POST[sexo]";
    echo "<br>CPF: $_POST[cpf]";
    echo "<br>Cidade: ";
    switch ($_POST['cidade']) {
        case 'cg':
            echo "Campina Grande";
            break;
        case 'pt':
            echo "Patos";
            break;
        default:
            echo "João Pessoa";
    }
    echo "<br>Interesse:";
    if (!empty($_POST['interesses']))
        foreach ($_POST['interesses'] as $interesse) {
            switch ($interesse) {
                case 'economia':
                    echo "<br>Economia";
                    break;
                case 'esporte':
                    echo "<br>Esporte";
                    break;
                default:
                    echo "<br>Entrenimento";
            }
        }
    else
        echo "Nenhum";
?>