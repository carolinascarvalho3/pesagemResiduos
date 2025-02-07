<?php
    namespace PHP\Modelo\Tela;
    require_once('..\DAO\Consultar.php');
    require_once('..\DAO\Conexao.php');

    use PHP\Modelo\DAO\Consultar;
    use PHP\Modelo\DAO\Conexao;

?>

<!DOCTYPE HTML>
<html>
<head>
        
        <meta charset="UTF-8">
        <title>CONSULTAR FUNCIONÁRIO</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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

        <h1>Consultar Funcionário</h1>

        <img src="imagens/PENSE ECO.png" class=logo width=120 height=auto alt="Imagem do aplicativo PENSE ECO">
    
    
    <form method="POST">
        <div class="mb-3">
            <label for="floatingSelect" class="campo1">Digite um CPF cadastrado:</label>
            <input type="text" class="campo2" id="tCpf" name="tCpf" placeholder="Digite aqui">


        </div>

         <button class="consultar" type="submit">Consultar</button>
    

        <div>
            <a class="voltar"  href="menu.php">Menu</a>
        </div> 
        
    <?php
        $conexao = new Conexao();
        $cpf = $_POST['tCpf'];
        $consultar = new Consultar();
        echo $consultar->consultarFuncionarioIndividual($conexao, $cpf);
    ?>
</form>

    <?php
        if(isset($_POST['tCpf'])){
            echo $consultar->consultarFuncionarioIndividual($conexao, $cpf);
        }else{
            echo "Preeencha o campo CPF";
        }

    ?>

    <footer><img src="imagens/folhas2.png" width=100% height=70 alt=""></footer>

</body>
</html>