<?php
    require_once '../classes/Produto.php';
    require_once '../classes/Erro.php';

    try{                             
        $produto = new Produto();
        $lista = $produto->listar();
    } catch(Exception $e){
        Erro::trataErro($e);
    }

    

    //Inicio do head do HTML
    require_once '../cabecalho.php';
?>
    <link rel="stylesheet" href="../css/style-tabela-listar.css">
    <title>Produto</title>
</head>
<body>
    <?php
      require_once 'nav-bar-table.php';
    ?>     
    
    <div class="container-fluid pt-3">
        <div class="card" id="card">
            <div class="card-body">
              <h2>Produto</h2>
            </div>
        </div>

        <?php if(isset($_GET['mensagem'])): ?> 
            <div class ="alert alert-success" role="alert">
                <?= $_GET['mensagem'] ?>
            </div>
        <?php endif; ?>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Valor de custo</th>
                <th scope="col">Valor de venda</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Status</th>
                <th scope="col">Ação</th>

            </tr>
            </thead>

            <tbody>

                <?php foreach($lista as $key => $linha){ 
                    $qtd = $linha['quantidade'];
                    $msg = "Status indisponivel";
                    //Função para status
                    if($qtd >= 1){
                        $msg = "Em estoque";
                    } else {
                        $msg = "Em falta";
                    }
                    ?> 

                <tr>
                    <td> <?= $linha['id'] ?></td>
                    <td> <?= $linha['nome'] ?></td>
                    <td> <?= $linha['descricao'] ?></td>
                    <td> R$ <?= $linha['valordecusto'] ?></td>
                    <td> R$ <?= $linha['valordevenda'] ?></td>
                    <td> <?= $linha['quantidade'] ?></td>
                    <td><?= $msg ?></td>
                    
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
                <?php }?>
            </tbody>
        </table>
        <a class="navbar-brand" href="produto-cadastrar.php">
          <button type="button" class="btn btn-primary">Cadastrar</button>
        </a>    
    </div>

<?php
    require_once '../rodape.php';
?>