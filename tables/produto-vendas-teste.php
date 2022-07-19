<?php
  require_once '../cabecalho.php';
  require_once '../classes/Venda.php';
  require_once '../classes/Produto.php';

  if(isset($_POST['idproduto']) != null)
  {
    $idvenda = $_POST['idvenda'];
    $idproduto = $_POST['idproduto'];
    $quant = $_POST['quant'];

    //carregando produto para pegar nome e valor unitario
    //FAZER IGUAL O QUE FIZ NA VENDA CADASTRAR PRA PEGAR O CLIENTE
    //CRIAR METODO DENTRO DE PRODUTO PRA CARREGAR O PRODUTO

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
                <input type="text" name="idvenda" id="idvenda" class="form-control" value="<?= $produto->nome?>">                
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