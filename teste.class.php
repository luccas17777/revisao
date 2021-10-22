<?php

    require_once("pessoa.class.php");

    class Teste{
        private $pessoa;

        public function __construct(){
            $pessoa = new Pessoa();

            $pessoa->setNome("Luccas Eduardo Luzada de Morais");
            echo $pessoa->getNome();
        }
    }new Teste();

?>