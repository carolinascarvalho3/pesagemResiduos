<?php
    
    namespace PHP\Modelo\Tela;
    require_once('..\Residuos.php');
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Inserir.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\DAO\Residuos;

?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
        <title>CADASTRO DE RESÍDUOS</title>
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

    <h1>Cadastro de Resíduos</h1>
    
    <img src="imagens/PENSE ECO.png" class=logo width=120 height=auto alt="Imagem do aplicativo PENSE ECO">


    <form method="POST">


    <div class="mb-3">
        <label for="lCodigo" class="campo1">CÓDIGO:</label>
        <input type="text" class="campo2" id="tCodigo" name="tCodigo" placeholder="Somente números">
    </div>

    <br>

    <div class="mb-3">
      <label for="lPessoaQueRegistrou" class="campo1">NOME DO ITEM:</label>
      <input type="text" class="campo2" id="tPessoaQueRegistrou" name="tNomeDoItem" placeholder="Nome do Item">
    </div>

    <br>
    <div class="mb-3">
      <label for="lPessoaQueRegistrou" class="campo1">PESSOA QUE REGISTROU:</label>
      <input type="text" class="campo2" id="tPessoaQueRegistrou" name="tPessoaQueRegistrou" placeholder="Digite seu nome">
    </div>

    <div class="mb-3">
      <label for="lPeso" class="campo1">PESO:</label>
      <input type="text" class="campo2" id="tPeso" name="tPeso" placeholder="Digite o peso dos resíduos">
    </div>

    <div class="mb-3">
      <label for="lCategoria" class="campo1">CATEGORIA:</label>
      <input type="text" class="campo2" id="tCategoria" name="tCategoria" placeholder="Escolha a categoria">
    </div>

    <div class="mb-3">
      <label for="lDataRegistro" class="campo1">DATA DE REGISTRO:</label>
      <input type="date" class="campo2" id="tDataRegistro" name="tDataRegistro" >
    </div>

<br>

<div>

    <div>
        <a class="voltar"  href="menu.php">Menu</a>
    </div>
    
    <button type="submit" class="submit">Cadastrar
        <?php
        $conexao = new Conexao();//Conectar no Banco

        if(isset($_POST['tCodigo'])){   
            $codigo = $_POST['tCodigo'];
            $nomeDoItem = $_POST['tNomeDoItem'];
            $pessoaQueRegistrou = $_POST['tPessoaQueRegistrou'];
            $peso = $_POST['tPeso'];
            $categoria = $_POST['tCategoria'];
            $dataRegistro = $_POST['tDataRegistro'];


          $inserir = new Inserir();
          echo $inserir->cadastrarResiduos($conexao, $codigo, $nomeDoItem, $pessoaQueRegistrou, $peso, $categoria, $dataRegistro);
        }
        else{
            echo "Preeencha o campo CPF";
        }

        ?>

    
    </button>
    


</div>
</form>

    

<footer><img src="imagens/folhas2.png" width=100% height=70 alt=""></footer>


</body>
</html>