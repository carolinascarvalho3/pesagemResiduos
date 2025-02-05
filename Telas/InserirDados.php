<?php
    
    namespace PHP\Modelo\Tela;
    require_once('..\DAO\Inserir.php');
    require_once('..\DAO\Conexao.php');
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\Conexao;

    

?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
        <title>ADICIONAR CATEGORIAS</title>
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
  
</header>


    <h1 class=inserir>Inserir Dados</h1>
    
    <img src="imagens/PENSE ECO.png" class=logo width=120 height=auto alt="Imagem do aplicativo PENSE ECO">


    

    <br><br><label for="lCategoria" class="campo1">CATEGORIA:</label>
    <select class="opcoes2" id="opcoes2" aria-label="Floating label select example">
    <option selected>Selecione</option>
    <option value="1">Não reciclável</option>
    <option value="2">Reciclável</option>
    <option value="3">Óleo</option>
    <option value="4">Tampinhas plásticas</option>
    <option value="5">Lacres de alumínio</option>
    <option value="6">Tecidos</option>
    <option value="7">Meias</option>
    <option value="8">Material de escrita</option>
    <option value="9">Esponjas</option>
    <option value="10">Eletrônicos</option>
    <option value="11">Pilhas e baterias</option>
    <option value="12">Infectantes</option>
    <option value="13">Químicos</option>
    <option value="14">Lâmpada fluorescente</option>
    <option value="15">Tôners de impressora</option>
    <option value="16">Esmaltes</option>
    <option value="17">Cosméticos</option>
    <option value="18">Cartela de medicamento</option>

</select>

<br><br><label for="lCategoria" class="campo1">Se encaixa em mais de uma categoria? </label>
<br><br><label for="lCategoria" class="campo1">Selecione todas: </label>



    <div class="form-check">
        <input class="caixa" type="checkbox" value="" id="flexCheckDefault">
        Reciclável
    </div>
  

    <div class="form-check">
      <input class="caixa" type="checkbox" value="" id="flexCheckChecked">
        Óleo
    </div>

    <div class="form-check">
      <input class="caixa" type="checkbox" value="" id="flexCheckChecked">
      Não-reciclável
    </div>

    <div class="form-check">
      <input class="caixa" type="checkbox" value="" id="flexCheckChecked">
      Tampinhas de plástico
    </div>

    <div class="form-check">
      <input class="caixa" type="checkbox" value="" id="flexCheckChecked">
      Lacres de alumínio
    </div>

    <div class="form-check">
      <input class="caixa" type="checkbox" value="" id="flexCheckChecked">
      Tecidos
    </div>

    <div class="form-check">
      <input class="caixa" type="checkbox" value="" id="flexCheckChecked">
      Meias
    </div>

    <div class="form-check">
      <input class="caixa" type="checkbox" value="" id="flexCheckChecked">
      Material de escrita
    </div>

    <div class="form-check">
      <input class="caixa" type="checkbox" value="" id="flexCheckChecked">
      Esponjas 
    </div>

    <div class="form-check">
      <input class="caixa" type="checkbox" value="" id="flexCheckChecked">
      Eletrônicos
    </div>

    <div class="form-check">
      <input class="caixa" type="checkbox" value="" id="flexCheckChecked">
      Pilhas e baterias
    </div>

    <div class="form-check">
      <input class="caixa" type="checkbox" value="" id="flexCheckChecked">
      Infectantes
    </div>

    <div class="form-check">
      <input class="caixa" type="checkbox" value="" id="flexCheckChecked">
      Químicos
    </div>

    <div class="form-check">
      <input class="caixa" type="checkbox" value="" id="flexCheckChecked">
      Lâmpadas fluorescentes
    </div>

    <div class="form-check">
      <input class="caixa" type="checkbox" value="" id="flexCheckChecked">
      Tôners de impressora
    </div>

    <div class="form-check">
      <input class="caixa" type="checkbox" value="" id="flexCheckChecked">
      Esmaltes
    </div>

    <div class="form-check">
      <input class="caixa" type="checkbox" value="" id="flexCheckChecked">
      Cosméticos
    </div>

    <div class="form-check">
      <input class="caixa" type="checkbox" value="" id="flexCheckChecked">
      Cartela de medicamentos
    </div>
    


    </div>


    <br>

    <div>

        <div>
            <a class="voltar"  href="menu.php">Menu</a>
        </div>

        <?php
            if(isset($_POST['tCodigo'])){
            echo $inserir->inserirDados($conexao, $codigoCategoria, $categoria);
        }
        ?>
        
        <button class="submit" type="submit">Inserir</button>
        
        <?php
        if(isset($_POST['tCodigoCategoria'])){  
            $categoria = $_POST['tCategoria'];

    
        $inserir = new Inserir();
        $conexao = new Conexao();
        $categoria = $inserir->inserirDados($conexao, $codigoCategoria, $categoria);
         }

        ?>
       
    
        

    </div>
</form>

    


<footer><img src="imagens/folhas2.png" width=100% height=70 alt=""></footer>




</body>
</html>