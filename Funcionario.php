<?php
    namespace PHP\Modelo;
    require_once('Pessoa.php');
    
    class Funcionario extends Pessoa{
        protected float $codigo;

        public function __construct(int $cpf, string $nome, string $telefone, string $endereco, $codigo)
        {
            parent:: __construct($cpf,$nome,$telefone,$endereco,$codigo);
            $this->codigo = $codigo;
        }//fim do construct

        public function __get(string $variavel):mixed
        {
            return $this->variavel;
        }//fim do get

        public function __set(string $variavel, string $novoDado):void 
        {
            $this->variavel = $novoDado;
        }//fim do set

        public function imprimir():string
        {
            return parent::imprimir().
                "<br>Código de Funcionário é: ".$this->codigo;
        }//fim do imprimir

    }//fim da classe Funcionário





?>