<?php
    namespace PHP\Modelo\Telas;
?>
<!DOCTYPE HTML>
<html>
<head>
   
        <meta charset="UTF-8">
        <title>Menu</title>
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
      
      
</nav>
    <img src="imagens/PENSE ECO.png" class=logo alt="Imagem do aplicativo PENSE ECO">
    <p>Bem vindo ao aplicativo de pesagem de resíduos sólidos. Navegue entre as opções abaixo.</p>

    

    <div class=divmenu>
        
    <a href="cadastroFuncionario.php"><img src="imagens/addfunc.svg"  width="120" height=auto class=foto1 alt="imagem de cadastro de funcionário"></a>


    <a href="consultarFuncionario.php"><img src="imagens/consultarfunc.svg" width="120" height=auto class=foto2 alt="imagem de consultar funcionário"></a>
    
    <a href="atualizarFuncionario.php"><img src="imagens/updatefunc.svg" width="120" height=auto class=foto3 alt="imagem de atualizar funcionário"></a>
    
    <a href="excluirFuncionario.php"><img src="imagens/deletefunc.svg" width="120" height=auto class=foto4 alt="imagem de excluir funcionário"></a>
    
    <br><br><a href="cadastroResiduos.php"><img src="imagens/addresi.svg" width="120" height=auto class=foto5 alt="imagem de cadastro de resíduos"></a>
    
    <a href="atualizarResiduos.php"><img src="imagens/consultaresi.svg" width="120" height=auto class=foto6 alt="imagem de consulta de resíduos"></a>

    <a href="consultarResiduos.php"><img src="imagens/updateresi.svg" width="120" height=auto class=foto7 alt="imagem de atualizar resíduos"></a>

    <a href="excluirResiduos.php"><img src="imagens/deleteresi.svg" width="120" height=auto class=foto8 alt="imagem de excluir resíduos"></a>

    <br><br><a href="inserirDados.php"><img src="imagens/inseridados.svg" width="120" height=auto class=foto9 alt="imagem de inserir dados"></a>



    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <footer><img src="imagens/folhas2.png" width=100% height=70 alt=""></footer>
</body>
</hmtl>