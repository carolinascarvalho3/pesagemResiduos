<?php
    namespace PHP\Modelo;


    class Categorias{
        
        protected string $codigoCategoria;
        protected string $categoria;

        

        public function __construct(string $categoria, int $codigoCategoria)

        {
            $this->categoria;
            $this->codigoCategoria;

        
        }//fim do construtor

    public function __get(string $variavel):mixed
    {
        return $this->variavel;
    }//fim do get

    public function __set(string $variavel, string $novoDado)
    {
        $this->variavel = $novoDado;
    }//fim do set
    

    }//fim da Classe

?>