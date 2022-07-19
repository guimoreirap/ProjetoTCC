<?php
  require_once '../cabecalho.php';
  require_once '../classes/Venda.php';
  require_once '../classes/Produto.php';
  require_once '../classes/ItensVenda.php';

  if(isset($_POST['idproduto']) != null)
  {
    $idvenda = $_POST['idvenda'];
    $idproduto = $_POST['idproduto'];
    $quant = $_POST['quant'];
    $nomeProduto;
    $valorunidade;
    $valortotal;

    //carregando produto para pegar nome e valor unitario
    try{                             
        $produto = new Produto();
        $produto->carregarProduto($idproduto);
        $nomeProduto = $produto->getNome();
        $valorunidade = $produto->getValorDeVenda();
    } catch(Exception $e){
        Erro::trataErro($e);
    }

    /*
        Faz o calculo do valor total da quantia do mesmo produto
        Utiliza typecast pra poder multiplicar as strings
        */
    $valortotal = (double)($valorunidade * $quant);

    //Insere um novo registro em ItensVenda
    $itensVenda = new ItensVenda();
    $itensVenda->idvenda = $idvenda;
    $itensVenda->idproduto = $idproduto;
    $itensVenda->produto = $nomeProduto;
    $itensVenda->valorunidade = $valorunidade;
    $itensVenda->quantidade = $quant;
    $itensVenda->valortotal = $valortotal;
    
    try{
        $itensVenda->inserir();
    }
    catch(Exception $e){
        Erro::trataErro(($e));
    }

    //Alterar estoque - reduzindo do estoque a quantidade do produto passada
    $vendas = new Venda;
    $vendas->atualizarVenda($idproduto, $quant);
  }
?>
    <link rel="stylesheet" href="../css/style-tabela-listar.css">
    <title>Teste Venda Produto</title>
</head>
<body>
    <?php
      require_once 'nav-bar-table.php';
    ?>     

    <div class="container-fluid pt-3">
        <div class="card" id="card">
            <div class="card-body">
              <h2>Teste Venda Produto </h2>
            </div>
        </div>

        <?php if(isset($_GET['mensagem'])): ?> 
            <div class ="alert alert-success" role="alert">
                <?= $_GET['mensagem'] ?>
            </div>

            
        <?php endif; 
        
        ?>
        
        <br>
         <form action="produto-vendas-teste.php" method="POST">
            <div class="mb-3">
                <label for="idvenda" class="form-label">ID Venda</label>
                <input type="text" name="idvenda" id="idvenda" class="form-control">                
            </div>
            <div class="mb-3">
                <label for="idproduto" class="form-label">ID Produto</label>
                <input type="text" name="idproduto" id="idproduto" class="form-control">                
            </div>
            <div class="mb-3">
                <label for="quant" class="form-label">Quantidade</label>
                <input type="text" name="quant" id="quant" class="form-control">                
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a class="navbar-brand" href="produto-listar.php">
                <button type="button" class="btn btn-secondary">Voltar</button>
            </a>
        </form>
    </div>

<?php
    require_once '../rodape.php';
?>