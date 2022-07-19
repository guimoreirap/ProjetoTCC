<?php

    require_once '../classes/Venda.php';
    require_once '../classes/Erro.php';

    try{                             
        $venda = new Venda();
        $lista = $venda->listar();
    } catch(Exception $e){
        Erro::trataErro($e);
    }
    require_once '../cabecalho.php';
?>
    <link rel="stylesheet" href="../css/style-tabela-listar.css">
    <title>Venda</title>
</head>
<body>
    <?php
      require_once 'nav-bar-table.php';
    ?>     
    
    <div class="container-fluid pt-3">
        <div class="card" id="card">
            <div class="card-body">
              <h2>Venda</h2>
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
                <th scope="col">Data</th>
                <th scope="col">Hora</th>
                <th scope="col">Cliente</th>
                <th scope="col">Valor total</th>
                <th scope="col">Saldo recebido</th>
                <th scope="col">Saldo a receber</th>
                <th scope="col">Status de recebimento</th>
                <th scope="col">Itens de venda</th>
                <th scope="col">Ação</th>

            </tr>
            </thead>

            <tbody>
                <?php foreach($lista as $key => $linha){ ?> 

                <tr>
                    <td><?= $linha['id'] ?></td>
                    <td><?= $linha['data'] ?></td>
                    <td><?= $linha['hora'] ?></td>
                    <td><?= $linha['cliente'] ?></td>
                    <td><?= $linha['valortotal'] ?></td>
                    <td><?= $linha['statusrecebimento'] ?></td>
                    <td><?= $linha['saldoreceber'] ?></td>
                    <td><?= $linha['saldorecebido'] ?></td>
                    <td  class="">
                        <form action="" > 
                            <div>
                                <!-- CHAMADA DO MODAL -->
                                <button type="button" name="alterar" value="itens-de-venda" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </button>
                            </div>

                            <!-- ESTRUTURA DO MODAL -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Itens de Venda</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-success table-striped">
                                            <tr>
                                                <th>ID</th>
                                                <th>Nome</th>
                                                <th>Qtd</th>
                                                <th>Valor unitário</th>
                                                <th>Valor total</th>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Coca-Cola Lata 350 ml</td>
                                                <td>17</td>
                                                <td>R$ 1,50</td>
                                                <td>R$ 36,50</td>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>Coca-Cola 1L Pet</td>
                                                <td>6</td>
                                                <td>R$ 7,50</td>
                                                <td>R$ 40,00</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Brahma Lata 500 ml</td>
                                                <td>2</td>
                                                <td>R$ 5,00</td>
                                                <td>R$ 10,00</td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </form>
                    </td>

                    <td  class="d-flex">
                        <form action="controle-recebimento-alterar.php" method="post">
                            <input type="hidden" name="id" value="<?= $linha['id'] ?>">

                            <button href="" type="submit" name="alterar" value="alterar" class="btn btn-warning btn-sm">
                                <i class="far fa-edit"></i>
                            </button>
                        </form>
                    </td>
                </tr>

            </tbody>
            <?php } ?>
        </table>
        
        <a class="navbar-brand" href="venda-cadastrar.php">
            <button type="button" class="btn btn-primary">Cadastrar</button>
        </a>
        

               
    </div>


<?php
    require_once '../rodape.php';
?>