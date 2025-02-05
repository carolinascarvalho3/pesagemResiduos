<?php
    namespace PHP\Modelo\Tela;
    require_once('..\Funcionario.php');
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Inserir.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\Funcionario;

?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
        <title>Cadastro Funcionário</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">


</head>
<body>

   


<nav>

    
      <ul class="nav nav-underline">
      <img src="imagens/LOGUINHO.png" width="70" height="auto" alt="logo do nav">
      <li class="nav-item">
          <a class="nav-link" href="#">Ajuda</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Reportar erro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Trabalhe conosco</a>
        </li>
      </ul>

    <h1>CADASTRO FUNCIONÁRIO</h1>
    <img src="imagens/PENSE ECO.png" class=logo width=120 height=auto alt="Imagem do aplicativo PENSE ECO">

    
    

    <form method="POST">


    <form method="POST">


    <div class="mb-3">
        <label for="lCpf" class="campo1">CPF:</label>
        <input type="text" class="campo2" id="tCpf" name="tCpf" placeholder="Somente números">
    </div>

    <div class="mb-3">
        <label for="lNome" class="campo1">NOME:</label>
        <input type="text" class="campo2" id="tNome" name="tNome" placeholder="Digite o nome">
    </div>

    <div class="mb-3">
        <label for="lTelefone" class="campo1">TELEFONE:</label>
        <input type="text" class="campo2" id="tTelefone" name="tTelefone" placeholder="Digite o telefone">
    </div>

    <div class="mb-3">
        <label for="lEndereco" class="campo1">ENDEREÇO:</label>
        <input type="text" class="campo2" id="tEndereco" name="tEndereco" placeholder="Digite o endereço">
    </div>

    <div class="mb-3">
        <label for="lCodigo" class="campo1">CÓDIGO FUNCIONÁRIO:</label>
    <input type="text" class="campo2" id="tCodigo" name="tCodigo" placeholder="Somente números">
    </div>

    <br>

    <div>

        <div>
            <a class="voltar"  href="menu.php">Menu</a>
        </div>
        
        <button type="submit" class="submit">Cadastrar
            <?php
            $conexao = new Conexao();//Conectar no Banco

            if(isset($_POST['tCpf'])){   
                $cpf = $_POST['tCpf'];
                $nome = $_POST['tNome'];
                $telefone = $_POST['tTelefone'];
                $endereco = $_POST['tEndereco'];
                $codigo = $_POST['tCodigo'];

            $inserir = new Inserir();
            echo $inserir->cadastrarFuncionario($conexao, $cpf, $nome, $telefone, $endereco, $codigo);
            }
        

            ?>
        </button>
        


    </div>
</form>

    


<footer><img src="imagens/folhas2.png" width=100% height=70 alt=""></footer>



</body>
</html>