<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Atualizar
    {
        function atualizarFuncionario(Conexao $conexao,
            string $campo,
            string $novoDado,
            int $cpf
        ){
            $conn = $conexao->conectar();
            $sql = "update funcionario set $campo = '$novoDado' where cpf = '$cpf'";

            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            if($result){
                echo "<br><center>Atualizado com sucesso!";
            }else{
                echo "<br><center>Não atualizado!";
            }
        }//fim do método
    }//fim da classe
?>