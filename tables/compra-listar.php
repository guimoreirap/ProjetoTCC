<?php
  require_once '../cabecalho.php';
?>

    <link rel="stylesheet" href="../css/style-tabela-listar.css">
    <title>Compra</title>
</head>
<body>
    <?php
      require_once 'nav-bar-table.php';
    ?>
    
    <div class="container-fluid pt-3">
        <div class="card" id="card">
            <div class="card-body">
              <h2>Compra</h2>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Data</th>
                <th scope="col">Hora</th>
                <th scope="col">Fornecedor</th>
                <th scope="col">Valor total</th>
                <th scope="col">Saldo pendente</th>
                <th scope="col">Data vencimento</th>
                <th scope="col">Status de pagamento</th>
                <th scope="col">Itens de compra</th>
                <th scope="col">Ação</th>

            </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Mark</td>
                    <td>Mark</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td  class="">
                        <form action="" >
                            <div>
                                <!-- CHAMADA DO MODAL -->
                                <button type="button" name="alterar" value="itens-de-compra" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </button>
                            </div>

                            <!-- ESTRUTURA DO MODAL -->
                            
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Itens de Compra</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-success table-striped">
                                            <tr>
                                                <th>Id</th>
                                                <th>Nome</th>
                                                <th>Quantidade</th>
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

                    </td>
                    <td  class="d-flex">
                        <form action="" >
                            <button type="" name="alterar" value="alterar" class="btn btn-warning btn-sm">
                                    <i class="far fa-edit"></i>
                            </button>
                        </form>
                            <button type="" name="excluir" value="excluir" class="btn btn-danger btn-sm">
                            <i class="far fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Mark</td>
                    <td>Mark</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td  class="">
                        <form action="" >
                            <div>
                                    <!-- CHAMADA DO MODAL -->
                                <button type="button" name="alterar" value="itens-de-compra" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </button>
                            </div>
      

                    </td>
                    <td  class="d-flex">
                        <form action="" >
                            <button type="" name="alterar" value="alterar" class="btn btn-warning btn-sm">
                                    <i class="far fa-edit"></i>
                            </button>
                        </form>
                            <button type="" name="excluir" value="excluir" class="btn btn-danger btn-sm">
                            <i class="far fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>

            </tbody>
        </table>
        <a class="navbar-brand" href="compra-cadastrar.php">
            <button type="button" class="btn btn-primary">Cadastrar</button>
        </a>
        

    </div>

<?php
    require_once '../rodape.php';
?>