<?php
    namespace PHP\Modelo;


    class Residuos{
        
        protected string $nomeDoItem;
        protected string $pessoaQueRegistrou;
        protected string $peso;
        protected string $categoria;
        protected string $dataRegistro;
        protected string $codigo;
        

        public function __construct(string $nomeDoItem, string $pessoaQueRegistrou, string $peso, string $categoria, datetime $dataRegistro, string $codigo)

        {
            $this->nomeDoItem;
            $this->pessoaQueRegistrou;
            $this->peso;
            $this->categoria;
            $this->dataRegistro;
            $this->codigo;
        }//fim do construtor

    public function __get(string $variavel):mixed
    {
        return $this->variavel;
    }//fim do get

    public function __set(string $variavel, string $novoDado)
    {
        $this->variavel = $novoDado;
    }//fim do set
    
    public function imprimir():string{
        return "<br>Código do resíduo: ".$this->codigo.
               "<br>Nome do Item:".$this->nomeDoItem.
               "<br>Pessoa que Registrou: ".$this->pessoaQueRegistrou.
               "<br>Peso: ".$this->peso.
               "<br>Categoria: ".$this->categoria.       
               "<br>Data: ".$this->dataRegistro;
            }//fim do método

}//fim da Classe

?>