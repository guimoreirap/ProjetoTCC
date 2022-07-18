<?php
  require_once '../cabecalho.php';
  require_once '../classes/Venda.php';

  if(isset($_POST['id']) != null)
  {
    $id = $_POST['id'];
    $quant = $_POST['quant'];

    $vendas = new Venda;
    $vendas->atualizarVenda($id, $quant);
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
        <?php endif; ?>
        
        <br>
         <form action="produto-vendas-teste.php" method="POST">
            <div class="mb-3">
                <label for="id">ID Produto</label>
                <input type="text" name="id" id="id">                
            </div>
                <label for="quant">Quantidade</label>
                <input type="text" name="quant" id="quant">                
            <div class="mb-3">

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