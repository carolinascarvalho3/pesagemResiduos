<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;
    
    class Excluir{
        function excluirFuncionario(
            Conexao $conexao,
            int $cpf
        ){
            $conn = $conexao->conectar();
            $sql = "delete from funcionario where cpf = '$cpf'";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);

            if($result){
                echo "<center>Deletado com sucesso";
            }else{
                echo "<center>Não deletado";
            }
        }//fim do método

        function excluirResiduos(
            Conexao $conexao,
            int $cpf
        ){
            $conn = $conexao->conectar();
            $sql = "delete from residuos where cpf = '$codigo'";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);

            if($result){
                echo "<center>Deletado com sucesso";
            }else{
                echo "<center>Não deletado";
            }
        }//fim do método
    }
?>
