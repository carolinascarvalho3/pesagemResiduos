<?php
    namespace PHP\Modelo\DAO;


    class Conexao{
        function conectar(){
                try{
                $conn = mysqli_connect('localhost', 'root', '', 'pesagemResiduos');
                if($conn)
                echo "<br><center>Conectado com sucesso!";
                return $conn;
    
        
                }catch(Except $erro){
                { 
                return "<br><center>Algo deu errado...";
                }
            echo "<br><center>Algo deu errado...";
            }//fim do conectar
        }
    
        
    }//fim da classe





?>