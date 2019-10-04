<?php
namespace App\Mamifero;
use \App\Mamifero\Felino\Gato;
use \App\Caracteristicas\Animal\Nomeado;
class Pessoa{
    private $cpf;
    private $pet;
    use Nomeado;

    public function __construct(string $cpf,string $nome){
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function getCpf():string{
        return $this->cpf;
    }

    public function setCpf(string $cpf){
        $this->cpf = $cpf;
    }

    public function getPet():Gato{
        return $this->pet;
    }

    public function setPet(Gato $pet){
        $this->pet = $pet;
    }
}
?>
