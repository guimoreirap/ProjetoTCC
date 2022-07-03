<?php
  require_once '../cabecalho.php';
?>
    <link rel="stylesheet" href="../css/style-tabela-listar.css">
    <title>Usuário</title>
</head>
<body>
    <?php
      require_once 'nav-bar-table.php';
    ?>     

    <div class="container-fluid pt-3">
        <div class="card" id="card">
            <div class="card-body">
              <h2>Usuário</h2>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th> <!-- NOME DO FUNCIONARIO/USUARIO -->
                <th scope="col">E-mail</th> <!-- E-MAIL PARA ENTRAR NO SISTEMA -->
                <th scope="col">Telefone</th>
                <th scope="col">Nível de permissão</th> <!-- NIVEL DE GERENTE DO SISTEMA OU DE USUARIO COMUM ONDE TERÃO DIFERENTES PERMISSÕES DENTRO DO SISTEMAS -->
                <th scope="col">Status</th> <!-- INATIVO / ATIVO -->
                <th scope="col">Ação</th>

            </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>

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
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Mark</td>
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
        <a class="navbar-brand" href="../cadastro.php">
          <button type="button" class="btn btn-primary">Cadastrar</button>
        </a>
        <h5>PERGUNTAR PARA O GOIANO, FAZ SENTIDO TER UM CADASTRAR USUARIO AQUI? POIS JA EXISTET UM NA TELA DE LOGIN INICIAL, ONDE TODO USUARIO CADASTRADO TERA PERMISSAO MAIS BAIXA</h5>
        <H6>NESSA TELA O USUARIO COM PERMISSAO DE GERENTE PODERÁ DAR PERMISSAO MAIOR AOS USUARIOS, OU INATIVA-LOS/ATIVA-LOS, ATÉ MESMO EXCLUIR</H6>
        <H6>FAZ SENTIDO EXCLUIR UM USUARIO, OU APENAS INATIVA-LO? SE FOR APENAS INATIVAR PRECISO ALTERAR O BOTAO EXCLUIR</H6> 
        <H6>SE FOR PARA APENAS INATIVAR, FAZER A ALTERAÇÃO NO BOTÃO DE ALTERAR, E REMOVER O ICONE DE EXCLUIR</H6>
    </div>


<?php
    require_once '../rodape.php';
?>