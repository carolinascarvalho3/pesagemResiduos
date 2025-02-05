<?php
    namespace PHP\Modelo\Telas;
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Excluir.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Excluir;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXCLUIR FUNCIONÁRIO</title>
    
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
    <h1>Excluir Funcionários</h1>
    <img src="imagens/PENSE ECO.png" class=logo width=120 height=auto alt="Imagem do aplicativo PENSE ECO">

    <form method="POST">
        <label>CPF: </label>
        <input type="text" name="tCpf">

        <br><br><button class="excluir" type="submit">Excluir
            <?php
                $conexao = new Conexao();
                if(isset($_POST['tCpf'])){
                $cpf = $_POST['tCpf'];
                $excluir = new Excluir(); 

            }
            ?>
        </button>
    </form>

        <div>
            <a class="voltar"  href="menu.php">Menu</a>
        </div>

    <?php
        if(isset($_POST['tCpf'])){
            echo $excluir->excluirFuncionario($conexao, $cpf);
        }else{
        echo "<br><br><center>Informe um CPF válido!";
        }
    ?>

<footer><img src="imagens/folhas2.png" width=100% height=70 alt=""></footer>


</body>
</html>