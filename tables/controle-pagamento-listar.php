<?php
  require_once '../cabecalho.php';
?>
    <link rel="stylesheet" href="../css/style-tabela-listar.css">
    <title>Controle de Pagamento</title>
</head>
<body>
    <?php
        require_once 'menu.php';
        ?>   
     
    <div class="container-fluid pt-3">
        <div class="card" id="card">
            <div class="card-body">
              <h2>Controle de Pagamento</h2>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Data</th>
                <th scope="col">Hora</th>
                <th scope="col">Valor total da compra</th>
                <th scope="col">Valor pago</th>
                <th scope="col">Valor a pagar</th>
                <th scope="col">Forma de pagamento</th>
                <th scope="col">Data vencimento</th>
                <th scope="col">ID Compra</th>
                <th scope="col">Status</th>
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
                    <td>Mark</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>@mdo</td>
                    <td  class="d-flex">
                        <form action="" >
                          <a href="controle-pagamento-alterar.html">
                            <button type="" name="alterar" value="alterar" class="btn btn-warning btn-sm">
                                    <i class="far fa-edit"></i>
                            </button>
                          </a>
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
                  <td>Mark</td>
                  <td>@mdo</td>
                  <td  class="d-flex">
                      <form action="" >
                          <button type="" name="alterar" value="alterar" class="btn btn-warning btn-sm">
                                  <i class="far fa-edit"></i>
                          </button>
                      
                          <button type="" name="excluir" value="excluir" class="btn btn-danger btn-sm">
                          <i class="far fa-trash-alt"></i>
                          </button>
                      </form>
                  </td>
              </tr>
            </tbody>
        </table>
    </div>


<?php
    require_once '../rodape.php';
?>