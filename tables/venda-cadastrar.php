<?php
require_once '../classes/Venda.php'; 
require_once '../classes/Erro.php';

if(isset($_POST['salvar'])){

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $valordecusto = $_POST['valordecusto'];
    $valordevenda = $_POST['valordevenda'];
    $quantidade = $_POST['quantidade'];

    //ATUALIZA O OBJETO
    $venda = new Venda();
    $venda->nome = $nome;
    $venda->descricao = $descricao;
    $venda->valordecusto = $valordecusto;
    $venda->valordevenda = $valordevenda;
    $venda->quantidade = $quantidade;

    try{
        $vendas->inserir();
    }
    catch(Exception $e){
        Erro::trataErro(($e));
    }
    //Salva o objeto atualizado
    
    //Manda a mensagem para o produto-listar após a alteração bem sucedida
    $msg = "Registro inserido com sucesso.";
    header("location: venda-listar.php?mensagem={$msg}");
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
                            <label for="idcliente" class="form-label">ID Cliente</label>
                            <input type="text" class="form-control" id="idcliente">
                        </div>
                        <div class="mb-3">
                            <label for="cliente" class="form-label">Cliente</label>
                            <input type="text" class="form-control" id="cliente">
                        </div>
                        <!-- ITENS DA VENDA -->
                        <div class="mb-3">
                            <label for="idproduto" class="form-label">ID Produto</label>
                            <input type="text" class="form-control" id="idproduto">
                        </div>
                        <div class="mb-3">
                            <label for="quantidade" class="form-label">Quantidade</label>
                            <input type="text" class="form-control" id="quantidade">
                        </div>
                        <div class="mb-3">
                            <label for="valorrecebido" class="form-label">Valor Recebido</label>
                            <input type="text" class="form-control" id="valorrecebido">
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status de recebimento</label>
                            <select class="form-select" name="status" id="status">
                                <option value="Pendente" selected>Pendente</option>
                                <option value="Pago">Pago</option>
                            </select> 
                        </div>

                        <!-- TABELA DOS ITENS DA VENDA 
                        <br><br>
                        <div class="card" id="card">
                            <div class="card-body">
                              <h5>Itens da venda</h5>
                            </div>
                        </div>
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
                            <?php /* foreach($lista as $key => $linha){ ?>
                                
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
                            <?php }*/?>
                        </table>
                        -->

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