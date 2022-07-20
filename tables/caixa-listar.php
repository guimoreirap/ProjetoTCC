<?php
    require_once '../cabecalho.php';
?>
    <link rel="stylesheet" href="../css/style-tabela-listar.css">
    <title>Caixa</title>
</head>
<body>
    <?php
        require_once 'menu.php';
    ?>
    
    <div class="container-fluid pt-3">
        <div class="card" id="card">
            <div class="card-body">
              <h2>Caixa</h2>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Data abertura</th>
                <th scope="col">Hora abertura</th>
                <th scope="col">Valor abertura</th>
                <th scope="col">Funcionário</th>
                <th scope="col">Valor total de recebimento</th>
                <th scope="col">Valor total de pagamento</th>
                <th scope="col">Saldo</th>
                <th scope="col">Status</th>
                <th scope="col">Itens de caixa</th>
                <th scope="col">Ação</th>

            </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
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
                                <button type="button" name="alterar" value="itens-de-caixa" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </button>
                            </div>

                            <!-- ESTRUTURA DO MODAL -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Itens de Caixa</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-success table-striped">
                                            <tr>
                                                <th>Id</th>
                                                <th>Tipo</th>
                                                <th>Valor</th>
                                                
                                            </tr>
                                            <tr>
                                                <td>253</td>
                                                <td>Recebimento</td>
                                                <td>R$ 36,40</td>
                                            </tr>

                                            <tr>
                                                <td>171</td>
                                                <td>Pagamento</td>
                                                <td>R$ 71,85</td>
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
                    <td>Mark</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td  class="">
                        <form action="" >
                            <div>
                                <!-- CHAMADA DO MODAL -->
                                <button type="button" name="alterar" value="itens-de-caixa" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
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

                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Mark</td>
                    <td>Mark</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td  class="">
                        <form action="" >
                            <div>
                                <!-- CHAMADA DO MODAL -->
                                <button type="button" name="alterar" value="itens-de-caixa" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
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

                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Mark</td>
                    <td>Mark</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td  class="">
                        <form action="" >
                            <div>
                                <!-- CHAMADA DO MODAL -->
                                <button type="button" name="alterar" value="itens-de-caixa" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
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
        <button type="button" class="btn btn-primary">Abrir caixa</button>
        <button type="button" class="btn btn-danger">Fechar caixa</button>
    </div>

<?php
    require_once '../rodape.php';
?>