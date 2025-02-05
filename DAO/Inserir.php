<?php
    namespace PHP\Modelo\DAO;
    require_once('..\DAO\Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Inserir{
        
        function cadastrarFuncionario(Conexao $conexao, int $cpf, string $nome, string $telefone, string $endereco, int $codigo){

            try{
            $conn = $conexao->conectar();
            $sql = "Insert into Funcionario(cpf, nome, telefone, endereco, codigo)
                values('$cpf', '$nome', '$telefone','$endereco', '')";

                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);
                if($result){
                    return "<br><br>Inserido com sucesso!";
                }

                return "<br><br>Não inserido!";


            }
            catch(Except $erro)
            {
            return "<br><br>Algo deu errado...".$erro;
            }

        }//fim do método

        function cadastrarResiduos(Conexao $conexao, int $codigo, string $nomeDoItem, string $pessoaQueRegistrou, string $peso, string $categoria, string $dataRegistro){

            try{
            $conn = $conexao->conectar();
            $sql = "Insert into residuos(codigo, nomeDoitem, pessoaQueRegistrou, peso, categoria, dataRegistro) 
                    values('$codigo', '$nomeDoItem', '$pessoaQueRegistrou', '$peso', '$categoria', '$dataRegistro')";

                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);
                if($result){
                    return "<br><br>Inserido com sucesso!";
                }

                return "<br><br>Não inserido!";


            }
            catch(Except $erro)
            {
            return "<br><br>Algo deu errado...".$erro;
            }
        
        }//fim


    }//fim da classe


?>