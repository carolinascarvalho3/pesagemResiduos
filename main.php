<?php
    namespace PHP\Modelo;
    require_once('Funcionario.php');
    use PHP\Modelo\Funcionario;


    //Criando objeto
    $funcionario1 = new Funcionario("12324455547",
                          "João Caro",
                          "445454554",
                          "Rua Jipa, 1",
                          505050);

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