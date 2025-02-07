<?php
    namespace PHP\Modelo;
    require_once('Funcionario.php');
    use PHP\Modelo\Funcionario;


    //Criando objeto
    

    //visualizar os dados
    echo $funcionario1->imprimir();

    //Criando objeto
    $residuo1 = new Residuo("Garrafas Pet",
                          "20 Kg",
                          "Plástico",
                          "20/01/2025");

    //visualizar os dados
    echo $cliente1->imprimir();

    echo $residuo1->imprimir();



?>