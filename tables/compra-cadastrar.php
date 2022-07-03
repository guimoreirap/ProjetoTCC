<?php
  require_once '../cabecalho.php';
?>
    <link rel="stylesheet" href="../css/style-tabela-listar.css">
    <title>Cadastro de Compra</title>
</head>
<body>
    <?php
      require_once 'nav-bar-table.php';
    ?>

    <div class="container-fluid pt-3">
        <div class="card" id="card">
            <div class="card-body">
              <h2>Cadastro de Compra </h2>
            </div>
        </div>
<br>
         <form class="">
            <div class="mb-3">
                <div class="container">
                    <!-- DADOS DA VENDA -->
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Fornecedor</label>
                            <input type="text" class="form-control" id="exampleInputNome" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Data de vencimento</label>
                            <input type="date" class="form-control" id="exampleInputNome" aria-describedby="emailHelp">
                        </div>

                        <div class="card" id="card">
                            <div class="card-body">
                              <h5>Adicione os itens da compra</h5>
                            </div>
                        </div>
                        <!-- ITENS DA VENDA -->
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Produto</label>
                            <input type="text" class="form-control" id="exampleInputNome" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Quantidade</label>
                            <input type="text" class="form-control" id="exampleInputEstado">
                        </div>
                        <button type="submit" class="btn btn-success">Salvar itens da compra</button>
                </div>
                
            </div>

    <br>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a class="navbar-brand" href="compra-listar.php">
                <button type="button" class="btn btn-secondary">Voltar</button>
            </a>
        </form>
    </div>

<?php
    require_once '../rodape.php';
?>