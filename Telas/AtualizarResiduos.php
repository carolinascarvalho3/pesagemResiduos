<?php
    namespace PHP\Modelo\Telas;
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Atualizar.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Atualizar;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Resíduos</title>
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

        <h1>ATUALIZAR RESÍDUOS</h1>

        <img src="imagens/PENSE ECO.png" class=logo width=120 height=auto alt="Imagem do aplicativo PENSE ECO">

   
    <form method="POST">
    <label>CPF:</label>
    <input type="string" name="tCpf"/><br><br>

    <label>Escolha o campo que deseja atualizar:</label>
   
    <select name="tCampo">
        <option value="nomeDoItem">NOME DO ITEM</option>
        <option value="pessoaQueRegistrou">PESSOA QUE REGISTROU</option>
        <option value="peso">PESO</option>
        <option value="categoria">CATEGORIA</option>
        <option value="dataRegistro">DATA DO REGISTRO</option>

    </select><br><br>

    <label>NOVO DADO: </label>
    <input type="text" name="tNovoDado"/><br><br>

        <button class="atualizar" type="submit">Atualizar</button>
        <?php
        $conexao = new Conexao();
        if(isset($_POST['tCpf'])){
        $atualizar = new Atualizar();

        $cpf = $_POST['tCpf'];
        $campo = $_POST['tCampo'];
        $novoDado = $_POST['tNovoDado'];
        }

       ?>
    
        <div>
            <a class="voltar"  href="menu.php">Menu</a>
        </div>

    </form>
        <?php
            if(isset($_POST['tCpf'])){
            echo $atualizar->atualizarResiduos($conexao, $campo, $novoDado, $cpf);
        }
        ?>


<footer><img src="imagens/folhas2.png" width=100% height=70 alt=""></footer>


       
</body>
</html>