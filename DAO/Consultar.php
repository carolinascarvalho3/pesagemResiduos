<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;
    
    class Consultar{
        function consultarFuncionarioIndividual(
            Conexao $conexao,
            int $cpf
            
            )
            {
                try{
                    $conn = $conexao->conectar();
                    $sql = "select * from funcionario where cpf = '$cpf'";
                    $result = mysqli_query($conn, $sql);

                    while($dados = mysqli_fetch_Array($result)){
                        if($dados['cpf'] == $cpf){
                            echo "<br>CPF: ".$dados['cpf'].
                                    "<br>Nome: ".$dados['nome'].
                                    "<br>Telefone: ".$dados['telefone'].
                                    "<br>Endereço: ".$dados['endereco'].
                                    "<br>Codigo: ".$dados['codigo'];
                            return;//finalizar o While

                        }
                    }//fim do while
                    return "Digite um CPF válido";
                }
                catch(Except $erro)
                {
                    echo $erro;
                }
            }//fim do consultarFuncionarioIndividual

            function consultarResiduos(
                Conexao $conexao,
                int $codigo
                
                )
                {
                    try{
                        $conn = $conexao->conectar();
                        $sql = "select * from residuo where codigo = '$codigo'";
                        $result = mysqli_query($conn, $sql);
    
                        while($dados = mysqli_fetch_Array($result)){
                            if($dados['codigo'] == $codigo){
                                echo "<br>Nome do item: ".$dados['nomeDoItem'].
                                        "<br>Pessoa que registrou: ".$dados['pessoaQueRegistrou'].
                                        "<br>Peso: ".$dados['peso'].
                                        "<br>Categoria: ".$dados['categoria'].
                                        "<br>Data do Registro: ".$dados['dataRegistro'];
                                return;//finalizar o While
    
                            }
                        }//fim do while
                        return "Digite um CPF válido";
                    }
                    catch(Except $erro)
                    {
                        echo $erro;
                    }
                }//fim do consultarFuncionarioIndividual
    }//fim da classe

?>