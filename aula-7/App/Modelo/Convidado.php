<?php
    namespace App\Modelo;
    class Convidado {
        private $nome;

        public function __construct(string $nome) {
            $this->nome = $nome;
        }

        public function getNome():string {
            return $this->nome;
        }

        public function setNome(string $nome) {
            $this->nome = $nome;
        }

        public function __toString() {
            return "Nome: $this->nome";
        }
    }
?>