<?php
    require_once '../classes/Produto.php';
    require_once '../classes/Erro.php';

    try{                             
        $produto = new Produto();
        $lista = $produto->listar();
    } catch(Exception $e){
        Erro::trataErro($e);
    }

    require_once '../cabecalho.php';
?>
    <link rel="stylesheet" href="../css/style-tabela-listar.css">
    <title>Cadastro de Venda</title>
</head>
<body>
    <?php
      require_once 'nav-bar-table.php';
    ?>     

    <div class="container-fluid pt-3">
        <div class="card" id="card">
            <div class="card-body">
              <h2>Cadastro de Venda </h2>
            </div>
        </div>
<br>
         <form class="">
            <div class="mb-3">
                <div class="container">
                    <!-- DADOS DA VENDA -->
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Cliente</label>
                            <input type="text" class="form-control" id="exampleInputNome" aria-describedby="emailHelp">
                        </div>

                        <div class="card" id="card">
                            <div class="card-body">
                              <h5>Adicione os itens da venda</h5>
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
                        <button type="submit" class="btn btn-success">Salvar itens da venda</button>

                        <!-- TABELA DOS ITENS DA VENDA -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">Valor de custo</th>
                                    <th scope="col">Valor de venda</th>
                                    <th scope="col">Quantidade</th>
                                    <th scope="col">Ação</th>
                                </tr>
                            <?php foreach($lista as $key => $linha){ ?>
                                
                            </thead> 
                            <tbody>
                                <tr>
                                    <td> <?= $linha['id'] ?></td>
                                    <td> <?= $linha['nome'] ?></td>
                                    <td> <?= $linha['descricao'] ?></td>
                                    <td> R$ <?= $linha['valordecusto'] ?></td>
                                    <td> R$ <?= $linha['valordevenda'] ?></td>
                                    <td> <?= $linha['quantidade'] ?></td>
                                    
                                    <td  class="d-flex">
                                        <form action="produto-alterar.php" method="post">
                                            <input type="hidden" name="id" value="<?= $linha['id'] ?>">

                                            <button href="" type="submit" name="alterar" value="alterar" class="btn btn-warning btn-sm">
                                                <i class="far fa-edit"></i>
                                            </button>
                                        </form>
                                        <form action="produto-excluir.php" method="post" onsubmit="return confirm('Tem certeza que quer excluir o registro?')">          
                                            <input type="hidden" name="id" value="   <?= $linha['id'] ?>">
                                            
                                            <button type="submit" id="excluir" name="excluir" value="excluir" class="btn btn-danger btn-sm">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            <?php }?>
                        </table>

                </div>
                
            </div>

    <br>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a class="navbar-brand" href="venda-listar.php">
                <button type="button" class="btn btn-secondary">Voltar</button>
            </a>
        </form>
    </div>

<?php
    require_once '../rodape.php';
?>